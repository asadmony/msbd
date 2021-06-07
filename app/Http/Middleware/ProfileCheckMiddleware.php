<?php

namespace App\Http\Middleware;

use App\Model\UserPayment;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProfileCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } 
            elseif(auth()->user()->isCommonWithoutAdmin()) {
                return redirect()->route('common1.dashboard');
            }
            elseif(auth()->user()->isMediaPerson()) {
                return redirect()->route('mediaperson.dashboard');
            }
            else{
                $inactivePayment = UserPayment::where('user_id', auth()->user()->id)->where('status', 'inactive')->first();
                if ($inactivePayment) {
                    view()->share('inactivePayment', $inactivePayment);
                }
                if (auth()->user()->profile == true) {
                    // return redirect()->route('user.incompleteProfile');
                    if (auth()->user()->branches->count() < 1 AND auth()->user()->userPayments->count() < 1){
                        if (Route::currentRouteName() != 'user.chooseService' && Route::currentRouteName() != 'user.choosePackage' && Route::currentRouteName() != 'user.savePackage' && Route::currentRouteName() != 'user.serviceCenter' && Route::currentRouteName() != 'user.attachBranch' && Route::currentRouteName() != 'user.branchContactPersons') {
                            return redirect()->route('user.chooseService');
                        }
                    }
                    else{
                        if (Route::currentRouteName() == 'user.serviceCenter' || Route::currentRouteName() == 'user.attachBranch') {
                            return redirect()->route('welcome.welcome');
                        }
                    }
                }
            }
            
        }
        return $next($request);
    }
}
