<?php

namespace App\Entities;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories
};

class ProductSubcategory
{
    public $id;

    public $key;

    public $value;

    public $categoryId;

    public function __construct(Array $values)
    {
        if (!array_key_exists('key', $values)) {
            throw new \Exception('Subcategory structure lacks [key]');
        }

        if (!array_key_exists('value', $values)) {
            throw new \Exception('Subcategory structure lacks [value]');
        }

        if (!array_key_exists('category_id', $values)) {
            throw new \Exception('Subcategory structure lacks [category_id]');
        }

        $this->id = LuProductSubcategories::where('value', $values['value'])
                                            ->where('category_id', $values['category_id'])
                                            ->first()
                                            ->id;

        $this->key = $values['key'];

        $this->value = $values['value'];

        $this->categoryId = $values['category_id'];
    }
}
