<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;

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

        // Check if a record for this IP exists within the last 24 hours
        $existingVisitor = Visitor::where('ip', $ip)
            ->where('created_at', '>=', Carbon::now()->subDay())
            ->first();

        if (!$existingVisitor) {
            // Handle localhost IPs
            if ($ip == '127.0.0.1' || $ip == '::1') {
                $location = (object)[
                    'countryName' => 'Localhost',
                    'cityName' => 'Localhost',
                ];
            } else {
                $location = Location::get($ip);
            }

            Visitor::create([
                'ip' => $ip,
                'country' => $location ? $location->countryName : 'Unknown',
                'city' => $location ? $location->cityName : 'Unknown',
            ]);
        }

        return $next($request);
    }
}
