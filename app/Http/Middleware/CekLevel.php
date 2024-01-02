<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ... $levels): Response
    {
        if (!in_array(Auth()->user()->level, $levels)) {
            return redirect()->route('profile.index')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }
        return $next($request);
    }
}
