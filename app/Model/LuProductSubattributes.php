<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LuProductSubattributes extends Model
{
    protected $table = 'lu_product_subattributes';

    public $timestamps = false;

    public function attribute()
    {
        return $this->hasOne(\App\Model\LuProductAttributesAdapter::class, 'id', 'attribute_id');
    }
}
