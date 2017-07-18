<?php

namespace App\Model;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Model\UserAddressAdapter as UserAddress;

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
        $this->password = Hash::make(str_random(12));
        $this->token = null;
        $this->save();

        return $this;
    }

    public function new(String $email)
    {
        $this->email = $email;
        $this->password = Hash::make(str_random(12));
        $this->save();

        return $this;
    }

    public function createEmptyAddress()
    {
        UserAddress::create([
            'user_id' => $this->id
            ]);

        return $this;
    }
}
