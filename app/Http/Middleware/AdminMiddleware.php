<?php

namespace KuaaSys\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$Auth::check() && $Auth::user()->role_name != 'admin') 
            return new Response(view('unauthorized')->with('role','admin'));
        }
        
        return $next($request);
    }
}
