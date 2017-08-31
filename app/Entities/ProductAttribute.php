<?php

namespace App\Entities;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes,
    LuProductSubAttributesAdapter as LuProductSubAttributes
};

class ProductAttribute
{
    protected $subattributes = [];

    protected $id;

    protected $name;

    public function __construct(Int $attributeId = null)
    {
        $this->setId($attributeId);

        $this->setName(LuProductAttributes::OPTIONS[$attributeId]['value']);

        $subattributes = LuProductSubAttributes::SUBATTRIBUTES;

        foreach ($subattributes as $subattribute) {
            if (!$subattribute::ATTRIBUTE_ID) {
                throw new \Exception('Subattribute has no ATTRIBUTE_ID constant associated to it');
            }

            if ($subattribute::ATTRIBUTE_ID == $attributeId) {
                foreach ($subattribute::getOptions() as $values) {
                    $this->addSubattribute($subattribute, $values);
                }
            }
        }
    }

    public function addSubattribute(String $subattribute, Array $values)
    {
        $this->subattributes[] = new ProductSubattribute($subattribute, $values);

        return $this;
    }

    public function subattributes(): Array
    {
        return $this->subattributes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }
}

