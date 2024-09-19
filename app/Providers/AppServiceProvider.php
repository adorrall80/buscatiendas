<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Region;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('auth.register', function ($view) {
            $view->with('regiones', Region::all());
        });
    }
}
