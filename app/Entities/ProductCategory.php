<?php

namespace App\Entities;

use App\Model\{
    Dictionary\LuProductSubcategoriesAdapter as LuProductSubcategories,
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
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
        return array_values(array_filter($this->subcategories(), function($subcategory) use ($key){
            return $subcategory->getKey() == $key;
        }))[0];
    }

    public function getSubcategoryById(Int $id)
    {
        return array_values(array_filter($this->subcategories(), function($subcategory) use ($id){
            return $subcategory->getId() == $id;
        }))[0];
    }

    /**
     * getRandomSubcategoryId gets a random subcategory_id
     * @return Int
     */
    public function getRandomSubcategoryId(): Int
    {
        $subcategories = $this->subcategories();

        return $subcategories[rand(0, count($subcategories) - 1)]->getId();
    }

    /**
     * getRandomSubcategoryIds gets a random subcategory_id array
     * @return Array
     */
    public function getRandomSubcategoryIds(Int $count = 3): Array
    {
        $subcategories = $this->subcategories();

        $ids = [];

        while (count($ids) < $count) {
            $id = $subcategories[rand(0, count($subcategories) - 1)]->getId();

            if (!in_array($id, $ids)) {
                $ids[] = $id;
            }
        }

        return $ids;
    }
}
