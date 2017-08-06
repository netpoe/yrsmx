<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelProductsOutfit extends Model
{
    protected $table = 'rel_products_outfit';

    protected $fillable = [
        'outfit_id',
        'product_id',
    ];

    public function product()
    {
        return $this->hasMany(\App\Model\ProductsAdapter::class, 'id', 'product_id');
    }
}
