<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        putenv('DB_CONNECTION=sqlite');

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate', ['--seed' => true]);
        Artisan::call('db:seed', ['--class' => 'UserWithCompleteCusualWearQuizSeeder']);
        Artisan::call('db:seed', ['--class' => 'SuperAdminUserSeeder']);
        Artisan::call('db:seed', ['--class' => 'ProductsWithAttributesAndCategoriesSeeder']);
    }
}
