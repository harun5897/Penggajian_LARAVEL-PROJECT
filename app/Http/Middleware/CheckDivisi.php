<?php

namespace App\Http\Middleware;

use Closure;

class CheckDivisi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$divisis)
    {
        if (in_array($request->user()->divisi, $divisis)) {
            return $next($request);
        }

        return redirect('/');
    }
}
