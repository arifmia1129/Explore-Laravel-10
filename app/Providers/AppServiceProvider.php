<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // View::share([
        //     'country'=>'Bangladesh',
        //     'city'=>'Gaibandha'
        // ]);

        View::composer(['person'], function ($view){
            $view->with(['country'=>'Bangladesh', 'city'=>'Gaibandha']);
        });
    }
}
