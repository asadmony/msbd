<?php

namespace App\Providers;

use Auth;
use Cache;
use App\Model\WebsiteParameter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('websiteParameter', WebsiteParameter::latest()->first());
    }
}
