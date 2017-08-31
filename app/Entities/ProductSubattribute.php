<?php

namespace App\Entities;

use App\Model\{
    LuProductSubattributesAdapter as LuProductSubattributes
};

class ProductSubattribute
{
    protected $id;

    protected $class;

    protected $key;

    protected $value;

    protected $attributeId;

    public function __construct(String $subattribute, Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subattribute structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subattribute structure lacks [value]');
        }

        $attributeId = $subattribute::ATTRIBUTE_ID;

        $this->setId(LuProductSubattributes::where('attribute_id', $attributeId)
                                            ->where('value', $values['value'])
                                            ->first()
                                            ->id);

        $this->setClass($subattribute);

        $this->setKey($values['key']);

        $this->setValue($values['value']);

        $this->setAttributeId($attributeId);
    }

    /**
     * getters / setters
     */

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getAttributeId()
    {
        return $this->attributeId;
    }

    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;

        return $this;
    }
}
