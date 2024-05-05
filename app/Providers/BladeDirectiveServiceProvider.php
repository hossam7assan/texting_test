<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('active', function ($expression) {
            return request()->routeIs($expression) ? "active" : '';
        });

        Blade::directive('open', function ($expression) {
            return request()->routeIs($expression) ? "menu-is-opening menu-open active" : '';
        });
    }
}
