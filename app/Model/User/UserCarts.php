<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserCarts extends Model
{
    protected $table = 'user_carts';

    protected $fillable = [
        'user_id',
        'user_address_id',
    ];

    public function userAddress()
    {
        return $this->hasOne(\App\Model\User\UserAddressAdapter::class, 'id', 'user_address_id');
    }
}
