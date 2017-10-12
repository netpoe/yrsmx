<?php

namespace App\Model;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Model\User\UserAddressAdapter as UserAddress;
use App\Model\User\UserInfoAdapter as UserInfo;
use App\Model\Dictionary\LuUserRole;
use App\Model\RelProductsOutfitAdapter as ProductsOutfit;

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

    /**
     * confirmEmail Mark a user token as null
     * and the is_verified field as true when a user completes the email
     * verification funnel
     * @return self
     */
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

    /**
     * createEmptyAddress A user may have many addresses,
     * this method associates an empty user_address row with the user
     * @return self
     */
    public function createEmptyAddress()
    {
        return UserAddress::create([
            'user_id' => $this->id
            ]);
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

    /**
     * hasPendingQuiz Determine if a user has a pending quiz if it has a quiz
     * and the quiz has a null completed_ts
     * @return boolean
     */
    public function hasPendingQuiz()
    {
        return $this->getLatestQuiz() && $this->getLatestQuiz()->completed_at === null;
    }

    /**
     * [isAdmin The user is a super-admin or admin]
     * @return boolean [description]
     */
    public function isAdmin(): bool
    {
        return $this->role_id === LuUserRole::SUPER_ADMIN ||
                $this->role_id === LuUserRole::ADMIN;
    }

    /**
     * hasUpdatedPassword Determine if a user has updated its password
     * because a random password is generated when it starts a new quiz
     * @return boolean
     */
    public function hasUpdatedPassword(): bool
    {
        return $this->updated_password_ts != null;
    }

    public function latestOutfit()
    {
        return $this->outfits()->orderBy('created_at', 'desc')->first();
    }

    public function latestCart()
    {
        return $this->carts()->orderBy('created_at', 'desc')->first();
    }
}
