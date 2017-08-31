<?php

namespace App\Entities;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductCategoriesAdapter as LuProductCategories
};

class ProductCategory
{
    protected $subcategories = [];

    protected $id;

    protected $name;

    public function __construct(Int $categoryId = null)
    {
        $this->setId($categoryId);

        $this->setName(LuProductCategories::OPTIONS[$categoryId]['value']);

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
