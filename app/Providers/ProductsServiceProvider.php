<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Aws\Laravel\AwsServiceProvider;
use App\Service\ProductsService;

class ProductsServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    // public function boot(AwsServiceProvider $aws)
    // {

    // }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(AwsServiceProvider $aws)
    {
        $this->app->singleton(ProductsService::class, function ($app) {
            return new ProductsService($aws);
        });
    }
}
