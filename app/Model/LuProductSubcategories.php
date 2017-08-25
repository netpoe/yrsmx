<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LuProductSubcategories extends Model
{
    protected $table = 'lu_product_subcategories';

    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(\App\Model\LuProductCategoriesAdapter::class, 'id', 'category_id');
    }
}
