<?php

namespace App\Model;

class RelProductsCategoriesAdapter extends RelProductsCategories
{
    public static function getProductId(Int $categoryId, Int $subcategoryId)
    {
        $relProductSubcategory = RelProductsCategories::where('category_id', $categoryId)
                                                ->where('subcategory_id', $subcategoryId)
                                                ->first();

        return $relProductSubcategory ? $relProductSubcategory->product_id : null;
    }
}
