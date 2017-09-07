<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function files()
    {
        return $this->hasMany(\App\Model\RelProductsGalleryAdapter::class, 'product_id');
    }

    public function attributes()
    {
        return $this->hasMany(\App\Model\RelProductsAttributesAdapter::class, 'product_id');
    }

    public function categories()
    {
        return $this->hasMany(\App\Model\RelProductsCategoriesAdapter::class, 'product_id');
    }

    // public function attributes()
    // {
    //     return $this->belongsToMany(
    //         \App\Model\LuProductAttributesAdapter::class,
    //         (new \App\Model\RelProductsAttributes)->getTable(),
    //         'product_id',
    //         'attribute_id');
    // }

    // public function subattributes()
    // {
    //     return $this->belongsToMany(
    //         \App\Model\LuProductSubattributesAdapter::class,
    //         (new \App\Model\RelProductsAttributes)->getTable(),
    //         'product_id',
    //         'subattribute_id');
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(
    //         \App\Model\LuProductCategoriesAdapter::class,
    //         (new \App\Model\RelProductsCategories)->getTable(),
    //         'product_id',
    //         'category_id');
    // }

    // public function subcategories()
    // {
    //     return $this->belongsToMany(
    //         \App\Model\LuProductSubcategoriesAdapter::class,
    //         (new \App\Model\RelProductsCategories)->getTable(),
    //         'product_id',
    //         'subcategory_id');
    // }
}
