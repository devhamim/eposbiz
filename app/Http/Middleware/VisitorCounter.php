<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;
use Log;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        if ($request->hasHeader('X-Forwarded-For')) {
            $ip = $request->header('X-Forwarded-For');
        } elseif ($request->hasHeader('CF-Connecting-IP')) {
            $ip = $request->header('CF-Connecting-IP');
        }

        $existingVisitor = Visitor::where('ip', $ip)
            ->where('created_at', '>=', Carbon::now()->subDay())
            ->first();

        if (!$existingVisitor) {
            if ($ip == '127.0.0.1' || $ip == '::1') {
                $location = (object)[
                    'countryName' => 'Localhost',
                    'cityName' => 'Localhost',
                ];
            } else {
                $location = Location::get($ip);
            }

            if (!$location) {
                $location = (object)[
                    'countryName' => config('location.position.default.countryName'),
                    'cityName' => config('location.position.default.cityName'),
                ];
            }

            Log::info('Visitor IP: ' . $ip);
            Log::info('Location Data: ', (array)$location);

            Visitor::create([
                'ip' => $ip,
                'country' => $location->countryName,
                'city' => $location->cityName,
            ]);
        }

        return $next($request);
    }
}
