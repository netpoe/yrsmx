<?php

namespace App\Service;

use App\Entities\{
    ProductCategory,
    ProductSubcategory
};

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

    protected $quiz;

    public function assignProductsToUser(User $user)
    {
        $this->user = $user;

        $this->quiz = $this->user->getLatestQuiz();

        // for each Clothes subcategory
        // check that there is a product_id
        // IF there is a product_id for a product that:
        // matches that Cloth subcategories with the user subcategory preferences
        // and that the product attributes matches the user attribute preferences
        //

        $this->assignProductIdsToUserFromProductTypeCategory()
            ->thatMatchesSubcategoryDependencies();

        $category = new ProductCategory(LuProductCategories::TYPE);

        $productIds = [];

        while (count($productIds) <= self::PRODUCTS_COUNT) {

        }

        return $this;
    }

    public $currentProductTypeIndex = 0;

    public function assignProductIdsToUserFromProductTypeCategory()
    {
        $category = new ProductCategory(LuProductCategories::TYPE);

        $subcategories = $category->subcategories();

        $currentProductType = $subcategories[$this->currentProductTypeIndex];

        $productId = RelProductsCategories::where('category_id', LuProductCategories::TYPE)
                                            ->where('subcategory_id', $currentProductType->getId());

        if ($currentProductType->hasDependencies()) {
            $dependencies = $currentProductType->getDependencies();
            foreach ($dependencies as $dependency) {
                $dependencySubcategory = $dependency->getSubcategoryModeName();

                $dependencySubcategoryModelName = get_parent_class($dependencySubcategory);

                $dependencySubcategoryModel = new $dependencySubcategoryModelName;

                $dependencySubcategoryColumn = $dependencySubcategory::COLUMN;

                $quizRelationshipMethodName = $dependencySubcategoryModel->getQuizRelationshipMethodName();

                $value = $this->quiz->$quizRelationshipMethodName->$dependencySubcategoryColumn;

                $productId->where('subcategory_id', )
            }
        }

        $productId->first()->product_id;
    }

    public function getProductIdFromClothType($type)
    {
        $categoryId = LuProductCategories::TYPE;

        $subcategoryId = LuProductSubcategories::getSubcategoryId(
                                                    $categoryId,
                                                    Clothes::class,
                                                    $type);

        $productId = RelProductsCategories::getProductId(
                                                $categoryId,
                                                $subcategoryId
                                                );

        return $productId;
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

            if (!$productId) {
                $count++; continue;
            }

            if ($previousProductId == $productId) {
                $count++; continue;
            }

            $previousProductId = $productId;

            $count++;
        }

        return $this;
    }
}









