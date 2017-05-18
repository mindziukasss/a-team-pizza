<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
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
        $role = auth()->user()->role()->pluck('id')->toArray();
//         dd(auth()->user()->role);
        if (in_array('super-admin', $role))
        {
            return $next($request);

        } else {

            abort(403);
        }
    }
}
