<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LocaleMiddleware
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
        if(Cookie::get('locale') == 'bn')
        {
            App::setLocale('bn');
        }
        elseif(Cookie::get('locale') == 'en')
        {
            App::setLocale('en');
        }

        elseif(Cookie::get('locale') == null)
        {
            $cookie = cookie('locale', 'en', 43200);
            App::setLocale('en');
            return $next($request)->withCookie($cookie);
        }
        return $next($request); 
    }
}
