<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeoutMiddleware
{
    public function handle($request, Closure $next)
    {
        $maxIdleTime = config('session.lifetime') * 60; // Convert minutes to seconds
        $lastActivity = session('last_activity', 0);

        if (time() - $lastActivity > $maxIdleTime) {
            // Session has expired, log the user/admin out
            auth()->logout();

            return redirect('/login')->with('error', 'Your session has expired. Please log in again.');
        }

        // Update the last activity timestamp
        session(['last_activity' => time()]);

        return $next($request);
    }
}
