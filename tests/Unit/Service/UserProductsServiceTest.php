<?php

namespace Tests\Unit\Service;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Service\UserProductsService;

class UserProductsServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssignProductsToUser()
    {
        $user = $this->getUserWithCompleteCasualWearQuiz();

        $userProducsService = new UserProductsService($user);

        $userProducsService->assignProductsToUser();

        // $this->assertTrue(true);
    }
}
