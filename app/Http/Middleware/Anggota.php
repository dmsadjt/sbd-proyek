<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Anggota
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->id == 3) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->id == 2) {
            return redirect('/home/kadiv');
        } else {
            return redirect('/home/ksb');
        }
    }
}
