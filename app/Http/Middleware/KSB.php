<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class KSB
{

    function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->id == 1) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->id == 2) {
            return redirect('/home/kadiv');
        } else {
            return redirect('/home/anggota');
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     **/

}
