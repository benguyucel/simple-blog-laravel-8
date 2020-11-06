<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

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
        view()->share('config',Config::find(1));
        Paginator::useBootstrap();
        Route::resourceVerbs([
            'create' => 'olustur',
            'edit' => 'guncelle'
        ]);
        //
    }
}
