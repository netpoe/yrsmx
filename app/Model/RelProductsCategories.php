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

    public function products()
    {
        return $this->belongsTo(\App\Model\ProductsAdapter::class, 'product_id');
    }

    public function subcategory()
    {
        return $this->hasOne(\App\Model\LuProductSubcategoriesAdapter::class, 'id', 'subcategory_id');
    }
}
