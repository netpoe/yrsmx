<?php

namespace App\Entities;

class ProductSubcategory
{
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

        $this->key = $values['key'];

        $this->value = $values['value'];

        $this->categoryId = $values['category_id'];
    }
}
