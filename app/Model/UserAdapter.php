<?php

namespace App\Model;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Model\UserAddressAdapter as UserAddress;
use App\Model\UserInfoAdapter as UserInfo;

class UserAdapter extends User
{
    public static function boot()
    {
        parent::boot();

        static::creating(function($user){
            $user->token = str_random(30);
            $user->referral_code = str_random(7);
        });
    }

    public function confirmEmail()
    {
        $this->is_verified = true;
        $this->token = null;
        $this->save();

        return $this;
    }

    /**
     * Creates a new user with a random password so it can be logged in
     *
     * return UserAdapter
     */
    public function new(String $email)
    {
        $this->email = $email;
        $this->password = Hash::make(str_random(12));
        $this->save();

        UserInfo::create([
            'user_id' => $this->id,
            ]);

        return $this;
    }

    public function createEmptyAddress()
    {
        UserAddress::create([
            'user_id' => $this->id
            ]);

        return $this;
    }

    /**
     * Gets the last quiz of the user
     *
     * @return Eloquent Collection
     */
    public function getLatestQuiz()
    {
        return $this->quizzes()->orderBy('started_at', 'desc')->first();
    }

    /**
     * Gets the last completed quiz of the user marked by completed_at
     *
     * @return Eloquent Collection
     */
    public function getLastCompletedQuiz()
    {
        return $this->quizzes()
            ->whereNotNull('completed_at')
            ->orderBy('completed_at', 'desc')
            ->first();
    }

    public function completed()
    {
        return $this->join('quiz', 'quiz.user_id', '=', 'users.id')
                    ->whereNotNull('quiz.completed_at')
                    ->groupBy('quiz.user_id')
                    ->get();
    }
}
