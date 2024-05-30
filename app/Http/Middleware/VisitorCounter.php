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
        $location = Location::get($ip);

        Visitor::create([
            'ip' => $ip,
            'country' => $location ? $location->countryName : 'Unknown',
            'city' => $location ? $location->cityName : 'Unknown',
        ]);

        return $next($request);
    }
}
