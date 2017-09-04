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
        $userProducsService = new UserProductsService;

        $user = $this->getUserWithCompleteCasualWearQuiz();

        $userProducsService->assignProductsToUser($user);

        $this->assertTrue(true);
    }
}
