<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class AdminAuth extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (!auth()->user() || auth()->user()->type != User::ADMIN) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
