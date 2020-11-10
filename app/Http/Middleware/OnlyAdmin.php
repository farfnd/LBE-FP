<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RedisTaggedCache;

class onlyAdmin
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
        if($request->user()->role != 'admin'){
            return redirect()->route('homepage');
        }
        return $next($request);
    }
}
