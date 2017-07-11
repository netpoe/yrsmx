<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Aws\Laravel\AwsServiceProvider;
use App\Service\ProductsService;

class ProductsServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductsService::class, function ($app) {
            return new ProductsService($app->make('aws'));
        });
    }

    public function provides()
    {
        return [ProductsService::class];
    }
}
