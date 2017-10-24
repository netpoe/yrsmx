<?php

namespace App\Entities;

use App\Model\{
    Dictionary\LuProductSubattributesAdapter as LuProductSubattributes,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

class ProductAttribute
{
    /**
     * $subattributes The subattributes associated with the attribute
     * @var array
     */
    protected $subattributes = [];

    /**
     * $id The attribute id
     * @var Int
     */
    protected $id;

    /**
     * $name The attribute name
     * @var String
     */
    protected $name;

    /**
     * $subattributeModelName Subattribute class associated to the attribute
     * @var String
     */
    protected $subattributeModelName;

    public function __construct(Int $attributeId = null)
    {
        $this->setId($attributeId);

        $this->setName(DictProductAttributes::OPTIONS[$attributeId]['value']);

        $this->setSubattributeModelName(DictProductAttributes::OPTIONS[$attributeId]['subattribute']);

        $subattribute = $this->getSubattributeModelName();

        if (!$subattribute::ATTRIBUTE_ID) {
            throw new \Exception('Subattribute has no ATTRIBUTE_ID constant associated to it');
        }

        foreach ($subattribute::getOptions() as $values) {
            $this->addSubattribute($subattribute, $values);
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

    public function getSubattributeByKey($key)
    {
        return array_values(array_filter($this->subattributes(), function($subattribute) use ($key){
            return $subattribute->getKey() == $key;
        }))[0];
    }

    public function getSubattributeById(Int $id)
    {
        return array_values(array_filter($this->subattributes(), function($subattribute) use ($id){
            return $subattribute->getId() == $id;
        }))[0];
    }

    public function getSubattributesAsInputOptionsArray(): Array
    {
        return array_map(function($subattribute){
            return [
                'key' => $subattribute->getId(),
                'value' => $subattribute->getValue(),
            ];
        }, $this->subattributes());
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

    public function getSubattributeModelName()
    {
        return $this->subattributeModelName;
    }

    public function setSubattributeModelName(String $subattributeModelName)
    {
        $this->subattributeModelName = $subattributeModelName;

        return $this;
    }

    /**
     * getRandomSubattributeIds gets a random subcategory_id array
     * @return Array
     */
    public function getRandomSubattributeIds(Int $count = 3): Array
    {
        $subattributes = $this->subattributes();

        $ids = [];

        while (count($ids) < $count) {
            $id = $subattributes[rand(0, count($subattributes) - 1)]->getId();

            if (!in_array($id, $ids)) {
                $ids[] = $id;
            }
        }

        return $ids;
    }
}
