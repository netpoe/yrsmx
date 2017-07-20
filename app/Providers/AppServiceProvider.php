<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ini_set('date.timezone', 'America/Mexico_City');
        date_default_timezone_set('America/Mexico_City');

        Schema::defaultStringLength(191);

        \Moment\Moment::setDefaultTimezone('UTC');

        \Moment\Moment::setLocale('es_ES');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
