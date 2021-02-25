<?php

namespace App\Http\Middleware;

use Auth;
use Cache;
use Closure;
use Carbon\Carbon;
use App\Model\Menu;
use App\Model\MembershipPackage;
use App\Model\UserSettingField;

class WelcomeMiddleware
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
            $au->save();
        }
        else
        {

        }

        if(!$request->ajax())
        {
            if (Auth::check()) {

                // view()->share('userMobileRightSidebarMenu', Cache::remember('userMobileRightSidebarMenu', 518400, function () {
                //     return Menu::has('pages')
                //     ->where('menu_title', 'User Mobile Right Sidebar Menu')
                //     ->with('pages', function($qq){$qq->whereActive(true);})
                //     ->first();
                //     // 518400 is one year
                // }));

                view()->share('userMobileRightSidebarMenu', Menu::has('pages')
                    ->where('menu_title', 'User Mobile Right Sidebar Menu')
                    ->with('pages', function($qq){$qq->whereActive(true);})
  
                    ->first());

                view()->share('userSettingFields', UserSettingField::all());
                view()->share('userHeaderMenu',  Menu::has('pages')
                    ->where('menu_title', 'User header menu')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('management',  Menu::has('pages')
                    ->where('menu_title', 'Management')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('membership',  Menu::has('pages')
                    ->where('menu_title', 'Membership Details')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('ownersMsg',  Menu::has('pages')
                    ->where('menu_title', 'Owners Message')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('contactUs',  Menu::has('pages')
                    ->where('menu_title', 'Contact Us')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('userFooterMenu',  Menu::has('pages')
                    ->where('menu_title', 'User footer menu')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
            }
            else
            {
                view()->share('welcomeHeaderMenu',  Menu::has('pages')
                    ->where('menu_title', 'Welcome Header Menu')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());

                view()->share('management',  Menu::has('pages')
                    ->where('menu_title', 'Management')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('membership',  Menu::has('pages')
                    ->where('menu_title', 'Membership Details')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('ownersMsg',  Menu::has('pages')
                    ->where('menu_title', 'Owners Message')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('contactUs',  Menu::has('pages')
                    ->where('menu_title', 'Contact Us')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
                view()->share('welcomeFooterMenu', Menu::has('pages')
                    ->where('menu_title', 'Welcome Footer Menu')
                    ->with('pages', function($qq){$qq->whereActive(true);})
                    ->first());
            }


            view()->share('mPackage1', MembershipPackage::where('package_currency', 'BDT')->get());

            view()->share('mPackage2', MembershipPackage::where('package_currency', 'USD')->get());



         }
         else
         {

            // view()->share('userHeaderMenu', Cache::remember('userHeaderMenu', 518400, function () {
            //     return Menu::has('pages')
            //     ->where('menu_title', 'User Header Menu')
            //     ->with('pages', function($qq){$qq->whereActive(true);})
            //     ->first();
            //     // 518400 is one year
            // }));
        }



        return $next($request);
    }
}
