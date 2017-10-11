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

    public function status()
    {
        return $this->hasOne(\App\Model\LuOrderStatusAdapter::class, 'id', 'status_id');
    }

    public function address()
    {
        return $this->hasOne(\App\Model\User\UserAddressAdapter::class, 'id', 'address_id');
    }

    public function user()
    {
        return $this->hasOne(\App\Model\UserAdapter::class, 'id', 'user_id');
    }
}
