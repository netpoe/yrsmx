<?php

namespace App\Entities;

use App\Model\{
    LuProductSubattributesAdapter as LuProductSubattributes,
    LuProductAttributesAdapter as LuProductAttributes
};

class ProductAttribute
{
    public $subattributes = [];

    public $id;

    public $name;

    public function init(Int $attributeId)
    {
        $this->id = $attributeId;

        $this->name = LuProductAttributes::OPTIONS[$attributeId]['value'];

        return $this;
    }

    public function addSubattribute(Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subattributes structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subattributes structure lacks [value]');
        }

        $this->subattributes[] = new ProductSubattribute($values);

        return $this;
    }

    public function get(Int $attributeId)
    {
        $this->init($attributeId);

        $subattributes = LuProductSubattributes::OPTIONS;

        foreach ($subattributes as $subattribute) {
            if ($subattribute['attribute_id'] == $attributeId) {
                $this->addSubattribute($subattribute);
            }
        }

        return $this;
    }

    public function subattributes(): Array
    {
        return $this->subattributes;
    }
}
