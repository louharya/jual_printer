<?php
// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role->name === 'admin') {
            return $next($request);
        }

        return redirect('/login'); // Redirect jika pengguna bukan admin
    }
}


