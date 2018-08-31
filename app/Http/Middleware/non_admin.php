<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class non_admin
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
        $response = $next($request);

        if(Auth::check() && Auth::user()->role == 'non-admin'){
            return $response;
        }
        return redirect('/admin');
    }   
}
