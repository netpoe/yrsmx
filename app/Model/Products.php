<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function files()
    {
        return $this->hasMany(\App\Model\ProductsGalleryAdapter::class, 'product_id');
    }

    public function attributes()
    {
        return $this->hasMany(\App\Model\ProductsAttributesAdapter::class, 'product_id');
    }

    public function categories()
    {
        return $this->hasMany(\App\Model\ProductsCategoriesAdapter::class, 'product_id');
    }

    public function info()
    {
        return $this->hasOne(\App\Model\ProductsInfoAdapter::class, 'product_id');
    }

    public function cost()
    {
        return $this->hasOne(\App\Model\ProductsCostAdapter::class, 'product_id');
    }
}
