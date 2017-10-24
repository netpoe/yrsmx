<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use App\Model\{
    UserAdapter as User,
    DictUserRole
};

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function getUserWithCompleteCasualWearQuiz()
    {
        $users = User::where('role_id', DictUserRole::CLIENT)->get();

        $user = $users->filter(function($user){
            return $user->getLatestQuiz()->isCasualWearQuiz();
        })->first();

        return $user;
    }
}
