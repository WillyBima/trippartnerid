<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthUser
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
        $check = Auth::guard('users')->check();
        
        if (!$check) {
          return redirect()->back();
        }
        return $next($request);
    }
}
