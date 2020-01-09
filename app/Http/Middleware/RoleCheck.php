<?php

namespace App\Http\Middleware;

use Closure;

class RoleCheck
{
    public function handle($request, Closure $next, $Role)
    {
        if ($request->user()->role_id != 1 && $request->user()->role_id != $Role) {
            return redirect('login');
        }else{
            return $next($request);
        }
    }
}