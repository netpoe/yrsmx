<?php

namespace App\Entities;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductCategoriesAdapter as LuProductCategories
};

class ProductCategory
{
    public $subcategories = [];

    public $id;

    public $name;

    public function init(Int $categoryId)
    {
        $this->id = $categoryId;

        $this->name = LuProductCategories::OPTIONS[$categoryId]['value'];

        return $this;
    }

    public function addSubcategory(Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subcategories structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subcategories structure lacks [value]');
        }

        $this->subcategories[] = new ProductSubcategory($values);

        return $this;
    }

    public function get(Int $categoryId)
    {
        $this->init($categoryId);

        $subcategories = LuProductSubcategories::OPTIONS;

        foreach ($subcategories as $subcategory) {
            if ($subcategory['category_id'] == $categoryId) {
                $this->addSubcategory($subcategory);
            }
        }

        return $this;
    }

    public function subcategories(): Array
    {
        return $this->subcategories;
    }
}
