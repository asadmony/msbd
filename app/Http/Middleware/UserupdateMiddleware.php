<?php

namespace App\Http\Middleware;

use Auth;
use Cache;
use Closure;
use Carbon\Carbon;
use App\Model\Menu;
use App\Model\MembershipPackage;

class UserupdateMiddleware
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
        if (Auth::check()) {
            $au = Auth::user();
            $au->updated_at = Carbon::now();
            // $au->listForAutoMail()->firstOrCreate([]);
            $au->save();

            // $uam = UsersForAutoMail::whereDoesntHave('items', function ($query) {
            //         $query->where('created_at', '>', Carbon::now()->subDays(6));
            //     })
            //     ->has('user')
            //     ->where('type', 'match')
            //     ->where('subscribed', 1)
            //     ->first();
            //     if ($uam) 
            //     {
            //         $uam->user->automailSend($uam);
            //     }



            if(!$request->ajax())
            {
                // view()->share('userHeaderMenu', Cache::remember('userHeaderMenu', 518400, function () {
                //         return Menu::has('pages')
                //         ->where('menu_title', 'User Header Menu')
                //         ->with('pages')
                //         ->first();
                //         // 518400 is one year
                //     }));
                

                view()->share('mPackage1', Cache::remember('mPackage1', 518400, function () {
                        return MembershipPackage::whereIn('id', ['1','2','3','4'])->get();
                    }));

                view()->share('mPackage2', Cache::remember('mPackage2', 518400, function () {
                        return MembershipPackage::whereIn('id', ['5','6','7','8'])->get();
                    }));

             }
             else
             {

                // view()->share('userHeaderMenu', Cache::remember('userHeaderMenu', 518400, function () {
                //     return Menu::has('pages')
                //     ->where('menu_title', 'User Header Menu')
                //     ->with('pages')
                //     ->first();
                //     // 518400 is one year
                // }));
            }
        }

        return $next($request);
    }
}
