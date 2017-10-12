<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
    protected $table = 'products_categories';

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
        return $this->hasOne(\App\Model\Dictionary\LuProductSubcategoriesAdapter::class, 'id', 'subcategory_id');
    }
}
