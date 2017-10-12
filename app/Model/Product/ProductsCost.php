<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductsCost extends Model
{
    protected $table = 'products_cost';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'cost',
        'price',
        'discount',
    ];
}
