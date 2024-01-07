<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ceklevel
{
    public function handle($request, Closure $next, ...$levels)
    {
        if (Auth::check() && in_array(Auth::user()->level, $levels)) {
            return $next($request);
        }

        return redirect('/'); 
    }
}
