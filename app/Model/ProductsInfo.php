<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductsInfo extends Model
{
    protected $table = 'products_info';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'sku',
        'stock',
        'name',
        'excerpt',
        'description',
    ];
}
