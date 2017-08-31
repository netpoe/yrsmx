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

    public function __construct(Int $categoryId = null)
    {
        $this->id = $categoryId;
    }

    public function init(Int $categoryId)
    {
        $this->id = $categoryId;

        $this->name = LuProductCategories::OPTIONS[$categoryId]['value'];

        return $this;
    }

    public function addSubcategory(Array $values)
    {
        $this->subcategories[] = new ProductSubcategory($values);

        return $this;
    }

    public function get(Int $categoryId)
    {
        $this->init($categoryId);

        $subcategories = LuProductSubcategories::getOptions();

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
