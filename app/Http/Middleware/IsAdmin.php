<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class IsAdmin
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
        if(Auth::guard('konsultant')->user()->is_admin == 1){
            return $next($request);
        }

        return redirect('/dashboard-konsultant')->with('error',"You don't have admin access.");
    }
}
