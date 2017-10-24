<?php

namespace App\Model\Dictionary;

use Illuminate\Database\Eloquent\Model;

class DictProductSubattributes extends Model
{
    protected $table = 'dict_product_subattributes';

    public $timestamps = false;

    public function attribute()
    {
        return $this->hasOne(\App\Model\Dictionary\DictProductAttributesAdapter::class, 'id', 'attribute_id');
    }
}
