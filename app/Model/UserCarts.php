<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserCarts extends Model
{
    protected $table = 'user_carts';

    protected $fillable = [
        'user_id',
    ];
}
