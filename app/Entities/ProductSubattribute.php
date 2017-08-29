<?php

namespace App\Entities;

use App\Model\{
    LuProductSubattributesAdapter as LuProductSubattributes
};

class ProductSubattribute
{
    public $id;

    public $key;

    public $value;

    public $attributeId;

    public function __construct(Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subattribute structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subattribute structure lacks [value]');
        }

        if (!array_key_exists('attribute_id', $values)) {
            throw new \Exception('Subattribute structure lacks [attribute_id]');
        }

        $this->id = LuProductSubattributes::where('attribute_id', $values['attribute_id'])
                                            ->where('value', $values['value'])
                                            ->first()
                                            ->id;

        $this->key = $values['key'];

        $this->value = $values['value'];

        $this->attributeId = $values['attribute_id'];
    }
}
