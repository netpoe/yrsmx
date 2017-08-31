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

        $this->name = LuProductCategories::OPTIONS[$categoryId]['value'];

        $subcategories = LuProductSubcategories::SUBCATEGORIES;

        foreach ($subcategories as $subcategory) {
            if (!$subcategory::CATEGORY_ID) {
                throw new \Exception('Subcategory has no CATEGORY_ID constant associated to it');
            }

            if ($subcategory::CATEGORY_ID == $categoryId) {
                foreach ($subcategory::getOptions() as $values) {
                    $this->addSubcategory($subcategory, $values);
                }
            }
        }
    }

    public function addSubcategory(String $subcategory, Array $values)
    {
        $this->subcategories[] = new ProductSubcategory($subcategory, $values);

        return $this;
    }

    public function subcategories(): Array
    {
        return $this->subcategories;
    }
}
