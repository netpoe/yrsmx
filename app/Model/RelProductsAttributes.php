<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelProductsAttributes extends Model
{
    protected $table = 'rel_products_attributes';

    protected $fillable = [
        'product_id',
        'attribute_id',
        'subattribute_id'
    ];
}
