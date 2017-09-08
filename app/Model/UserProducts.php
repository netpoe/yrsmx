<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserProducts extends Model
{
    protected $table = 'user_products';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function products()
    {
        return $this->hasMany(\App\Model\ProductsAdapter::class, 'product_id');
    }
}
