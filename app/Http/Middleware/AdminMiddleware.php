<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('user')) {
            return redirect()->route('login')->with('message', 'Anda harus masuk terlebih dahulu')->with('alert-type', 'error');
        }
        if (session('user')['role'] !== 'admin') {
            return redirect()->route('login')->with('message', 'Anda tidak memiliki akses ke halaman ini')->with('alert-type', 'error');
        }
        return $next($request);
    }
}
