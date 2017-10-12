<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductsAttributes extends Model
{
    protected $table = 'products_attributes';

    protected $fillable = [
        'product_id',
        'attribute_id',
        'subattribute_id'
    ];
}
