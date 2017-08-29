<?php

namespace App\Service;

use App\Model\{
    UserAdapter as User,
    ProductsAdapter as Products,
    UserProductsAdapter as UserProducts,
    RelProductsCategoriesAdapter as RelProductsCategories,
    RelProductsAttributesAdapter as RelProductsAttributes,
    LuProductCategoriesAdapter as LuProductCategories,
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    UserStyle\Clothes
};

class UserProductsService
{
    const PRODUCTS_COUNT = 3;

    protected $user;

    public function assignProductsToUser(User $user)
    {
        $this->user = $user;

        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::VESTIDOS);

        return $this;
    }

    public function assign(Int $categoryId, $subcategoryClass, $subcategory)
    {
        $count = 0;

        $previousSubcategoryId = null;

        $previousProductId = null;

        while ($count <= self::PRODUCTS_COUNT) {
            $subcategoryId = LuProductSubcategories::getSubcategoryId(
                                                    $categoryId,
                                                    $subcategoryClass,
                                                    $subcategory);

            if ($subcategoryId && $previousSubcategoryId == $subcategoryId) {
                $count++; continue;
            }

            $previousSubcategoryId = $subcategoryId;

            $productId = RelProductsCategories::getProductId(
                                                $categoryId,
                                                $subcategoryId
                                                );

            if ($productId && $previousProductId == $productId) {
                $count++; continue;
            }

            $previousProductId = $productId;

            // TODO
            // IF Product has stock
            // AND Product matches user sizes

            UserProducts::create([
                'user_id' => $this->user->id,
                'product_id' => $productId,
                ]);

            $count++;
        }

        return $this;
    }
}









