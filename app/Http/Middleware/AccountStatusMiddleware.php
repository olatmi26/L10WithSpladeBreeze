<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::user()->status == 0) {
            return redirect()->route('account-suspeded');
        } elseif (Auth::user()->status == null) {
            return redirect()->route('account-inactive');
        } elseif (Auth::user()->status == 2) {
            return redirect()->route('account-suspeded');
        } elseif (Auth::user()->status == 3) {
            return redirect()->route('account-restricted');
        }

        return $next($request);
    }
}
