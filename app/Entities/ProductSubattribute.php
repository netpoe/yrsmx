<?php

namespace App\Entities;

use App\Model\{
    LuProductSubattributesAdapter as LuProductSubattributes
};

class ProductSubattribute
{
    public $id;

    public $key;

    public $description;

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

        $this->id = LuProductSubattributes::where('subattribute', $values['key'])
                                            ->where('attribute_id', $values['attribute_id'])
                                            ->first()
                                            ->id;

        $this->key = $values['key'];

        $this->description = $values['value'];

        $this->attributeId = $values['attribute_id'];
    }
}
