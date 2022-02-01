<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::guard('admin')->check() && \Auth::guard('admin')->user()->role === 1) {
            return $next($request);
        }
        return redirect()->route('login');
    }
}