<?php

namespace App\Model\Dictionary;

use Illuminate\Database\Eloquent\Model;

class DictProductSubcategories extends Model
{
    protected $table = 'dict_product_subcategories';

    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(\App\Model\Dictionary\DictProductCategoriesAdapter::class, 'id', 'category_id');
    }
}
