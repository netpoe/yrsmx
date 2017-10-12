<?php

namespace App\Model\Dictionary;

use Illuminate\Database\Eloquent\Model;

class LuProductSubcategories extends Model
{
    protected $table = 'lu_product_subcategories';

    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(\App\Model\Dictionary\LuProductCategoriesAdapter::class, 'id', 'category_id');
    }
}
