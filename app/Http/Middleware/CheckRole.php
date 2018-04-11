<?php

namespace App\Http\Middleware;

use Closure;

use Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    
    if($role == 1)
    {
        return $next($request);
    }else{
        return back();
    }
    if($role == 2)
    {
        return $next($request);
    }else{
        return redirect('/');
    }
    if($role == 3)
    {
        return $next($request);
    }else{
        return redirect('/');
    }
    }
}
