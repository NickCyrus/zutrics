<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\UserController;
use Illuminate\Pagination\Paginator;

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
    public function boot( ConfigController $config , UserController $user )
    {
        Paginator::useBootstrap();
        /* Start APP*/
            View::share('nameApp', (object)["value"=>'Dashboard']);
            View::share('shortNameApp', (object)["value"=>'Dashboard']);
    }

}
