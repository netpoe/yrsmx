<?php

namespace App\Entities;

class ProductSubattribute
{
    public $id;

    public $name;

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

        $this->id = $values['key'];

        $this->name = $values['value'];

        $this->attributeId = $values['attribute_id'];
    }
}
