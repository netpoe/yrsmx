<?php

namespace App\Entities;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductCategoriesAdapter as LuProductCategories
};

class ProductCategory
{
    /**
     * $subcategories The subcategories associated with the category
     * @var array
     */
    protected $subcategories = [];

    /**
     * $id The category id
     * @var Int
     */
    protected $id;

    /**
     * $name The category name
     * @var String
     */
    protected $name;

    /**
     * $subcategoryModelName Subcategory class associated to the category
     * @var String
     */
    protected $subcategoryModelName;

    public function __construct(Int $categoryId = null)
    {
        $this->setId($categoryId);

        $this->setName(LuProductCategories::OPTIONS[$categoryId]['value']);

        $this->setSubcategoryModelName(LuProductCategories::OPTIONS[$categoryId]['subcategory']);

        $subcategory = $this->getSubcategoryModelName();

        if (!$subcategory::CATEGORY_ID) {
            throw new \Exception('Subcategory has no CATEGORY_ID constant associated to it');
        }

        foreach ($subcategory::getOptions() as $values) {
            $this->addSubcategory($subcategory, $values);
        }
    }

    public function addSubcategory(String $subcategory, Array $values)
    {
        $this->subcategories[] = new ProductSubcategory($subcategory, $values);

        return $this;
    }

    public function getSubcategoryOptions(): Array
    {
        return $this->getSubcategoryModelName()::OPTIONS;
    }

    public function getSubcategorysAsInputOptionsArray(): Array
    {
        return array_map(function($subcategory){
            return [
                'key' => $subcategory->getId(),
                'value' => $subcategory->getValue(),
            ];
        }, $this->subcategories());
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

    public function getSubcategoryModelName()
    {
        return $this->subcategoryModelName;
    }

    public function setSubcategoryModelName(String $subcategoryModelName)
    {
        $this->subcategoryModelName = $subcategoryModelName;

        return $this;
    }

    public function getSubcategoryByKey($key)
    {
        return array_filter($this->subcategories(), function($subcategory) use ($key) {
            return $subcategory->getKey() == $key;
        })[0];
    }

    public function getSubcategoryIdsByUserAnswers(Array $answers)
    {
        return array_diff(array_map(function($subcategory) use ($answers) {
            if (in_array($subcategory->getKey(), $answers)) {
                return $subcategory->getId();
            }
        }, $this->subcategories()), [NULL]);
    }
}
