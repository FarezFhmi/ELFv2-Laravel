<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminIsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if (!Auth::check()){
            return redirect('/login')->with('error-authorized', 'Please Login to access this application');
        }

        if (Auth::user()->roles->name !== 'Admin') {
            return redirect('/')->with('error-authorized', 'You are not authorized to access that page');
        }
        return $next($request);
    }
}
