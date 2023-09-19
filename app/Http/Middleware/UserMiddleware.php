<?php

// app/Http/Middleware/UserMiddleware.php

// app/Http/Middleware/UserMiddleware.php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role->name === 'user') {
            return $next($request);
        }

        return redirect('/login'); // Redirect jika pengguna bukan user biasa
    }
}


