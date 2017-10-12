<?php

namespace App\Model\Product;

class ProductsCategoriesAdapter extends ProductsCategories
{
    public static function getProductId(Int $categoryId, Int $subcategoryId)
    {
        $relProductSubcategory = ProductsCategories::where('category_id', $categoryId)
                                                ->where('subcategory_id', $subcategoryId)
                                                ->first();

        return $relProductSubcategory ? $relProductSubcategory->product_id : null;
    }
}
