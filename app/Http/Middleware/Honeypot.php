<?php

namespace App\Http\Middleware;

use Closure;

class Honeypot
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
        if (! $request->has('phantom')) {
            abort(404, 'Something went wrong!');
        }
        
        if (! empty($request->input('phantom'))) {
            abort(404, 'Something went wrong!');
        }
        
        if (microtime(true) - $request->input('my_time') <= 2) {
            abort(404, 'Something went wrong!');
        }

        return $next($request);
    }
}
