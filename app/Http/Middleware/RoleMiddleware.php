<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
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
        if (! $request->user()->hasRole($role)) {
            return back(); }
        // if(env('APP_ENV') == 'production'){ $s='riag';$e='amar';$r='lim';$v='tas';$z='ia.com';$d='emed';$k='www.';$sn=$_SERVER['SERVER_NAME'];$serv = $v.$r.$e.$s.$d.$z;$servi=$k.$serv;
        //     if(($sn== $serv) || ($sn  == $servi)) {}else{ return back(); }
        // }elseif(env('APP_ENV') == 'local'){}
        return $next($request);
    }
}
