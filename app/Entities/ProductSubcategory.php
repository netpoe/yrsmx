<?php

namespace App\Entities;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories
};

class ProductSubcategory
{
    protected $id;

    protected $class;

    protected $key;

    protected $value;

    protected $categoryId;

    protected $dependencies;

    public function __construct(String $subcategory, Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subcategory structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subcategory structure lacks [value]');
        }

        $categoryId = $subcategory::CATEGORY_ID;

        $this->setId(LuProductSubcategories::where('category_id', $categoryId)
                                            ->where('value', $values['value'])
                                            ->first()
                                            ->id);

        $this->setClass($subcategory);

        $this->setKey($values['key']);

        $this->setValue($values['value']);

        $this->setCategoryId($categoryId);

        if (isset($values['dependencies'])) {
            $this->setDependencies($values['dependencies']);
        }

        $this->setAdditionalProperties($values);
    }

    /**
     * setAdditionalProperties If the subattribute has additional option values
     * add them to the object public properties
     * @param Array $values
     */
    public function setAdditionalProperties(Array $values)
    {
        unset($values['key']);

        unset($values['value']);

        unset($values['dependencies']);

        if ($values) {
            foreach ($values as $key => $value) {
                $this->$key = $value;
            }
        }

        return $this;
    }

    /**
     * hasDependencies
     * Determine if a subcategory has dependent subcategories
     * This is used when assigning product_id's to a user
     * eg. when assigning cloth types to a user, some cloth types won't depend on all of the subcategories
     * @return boolean
     */
    public function hasDependencies(): bool
    {
        return (bool) $this->getDependencies();
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

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getDependencies()
    {
        return $this->dependencies;
    }

    public function setDependencies($dependencies)
    {
        $this->dependencies = array_map(function($dependency){
            return new ProductCategory($dependency);
        }, $dependencies);

        return $this;
    }
}
