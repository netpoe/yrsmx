<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserProducts extends Model
{
    protected $table = 'user_products';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'outfit_id',
        'product_id',
        'cart_id',
    ];
}
