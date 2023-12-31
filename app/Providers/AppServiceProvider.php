<?php

namespace App\Providers;

use App\Models\AppSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        // Using view composer to set following variables globally - Added By Shubham
        view()->composer('layouts.frontend', function ($view) {
            $view->with('vJs', "?v=" . 2);
            $view->with('vCss', "?v=" . 1);
            $view->with('vImg', "?v=" . 1);
        });

        // Load app_settings.php configuration files
        AppSetting::chargeConfig();
    }
}
