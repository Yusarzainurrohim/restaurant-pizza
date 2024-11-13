<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Mengecek apakah pengguna terautentikasi
        if (Auth::check()) {
            // Mengecek apakah role sesuai dengan yang diizinkan
            if (Auth::user()->role === $role) {
                return $next($request);
            }
        }

        // Jika tidak terautentikasi atau tidak memiliki role yang sesuai, redirect ke halaman login
        return redirect()->route('login')->withErrors(['access_denied' => 'Access Denied!']);
    }
}
