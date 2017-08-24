<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelProductsCategories extends Model
{
    protected $table = 'rel_products_categories';

    protected $fillable = [
        'product_id',
        'category_id',
        'subcategory_id'
    ];
}
