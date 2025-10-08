<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;
use Carbon\Carbon;


class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->is('api/*') || $request->is('admin/*')) {
            return $next($request);   
        }

        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');

        $today = Carbon::today();
        $existingVisit = Visit::where('ip_address', $ipAddress)
            ->where('user_agent', $userAgent)
            ->whereDate('created_at', $today)
            ->exists();

        if (!$existingVisit) {
            Visit::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
        ]);
        }   
        return $next($request);
    }
}
