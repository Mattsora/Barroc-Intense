<?php

namespace App\Http\Middleware;

use Closure;

class RoleCheck
{
    public function handle($request, Closure $next, $Role)
    {
        if ($request->user()->Role != 1 && $request->user()->Role != $Role) {
            return redirect('login');
        }
    }
}