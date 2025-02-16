<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in by checking session data
        if (!$request->session()->has('ADMIN_ID')) {
            // Redirect to login page or any other route if not logged in
           return redirect('/admin/login')->with('error', 'You must be logged in to access this page.');
        }

        return $next($request);
    }
}
