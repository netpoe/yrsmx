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
}
