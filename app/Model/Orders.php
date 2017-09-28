<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'cart_id',
        'address_id',
        'status_id',
        'payment_type',
        'warehouse_id',
        'delivered_at',
    ];
}
