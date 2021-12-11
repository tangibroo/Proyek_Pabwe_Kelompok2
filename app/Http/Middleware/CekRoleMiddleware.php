<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('roles')==='admin'){
            return redirect('/login');
        }
        return $next($request);
    }
}
