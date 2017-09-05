<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

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

    public $currentProductTypeIndex = -1;

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->quiz = $this->user->getLatestQuiz();
    }

    // public function assignProductsToUser()
    // {
        // $this->getProductIdsFromUserSelectionByProductTypeCategory();

    //     $category = new ProductCategory(LuProductCategories::TYPE);

    //     $productIds = [];

    //     while (count($productIds) <= self::PRODUCTS_COUNT) {

    //     }

    //     return $this;
    // }

    /**
     * assignProductsToUser
     * for each Clothes subcategory
     * check that there is a product_id
     * IF there is a product_id for a product that:
     * matches that Cloth subcategories with the user subcategory preferences
     * and that the product attributes matches the user attribute preferences
     * @return [type] [description]
     */
    public function assignProductsToUser()
    {
        $this->currentProductTypeIndex++;

        $category = new ProductCategory(LuProductCategories::TYPE);

        $subcategories = $category->subcategories();

        if ($this->currentProductTypeIndex > count($subcategories)-1) {
            return $this;
        }

        $currentProductType = $subcategories[$this->currentProductTypeIndex];

        error_log("Looking for products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] for user: [{$this->user->id}]");
        Log::info("Looking for products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] for user: [{$this->user->id}]");

        $builder = RelProductsCategories::where('category_id', LuProductCategories::TYPE)
                                        ->where('subcategory_id', $currentProductType->getId());

        $relProductCategories = $builder->get();

        // There's no product with this Cloth subcategory
        if ($relProductCategories->isEmpty()) {
            error_log("No products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] found for user: [{$this->user->id}]");
            Log::info("No products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] found for user: [{$this->user->id}]");
            return $this->assignProductsToUser();
        }

        error_log("Found [{$relProductCategories->count()}] products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] for user: [{$this->user->id}]");
        Log::info("Found [{$relProductCategories->count()}] products of type: [{$currentProductType->getValue()} ({$currentProductType->getId()})] for user: [{$this->user->id}]");

        $this->findSubcategories($currentProductType, $builder);

        return $this->assignProductsToUser();
    }

    public function findSubcategories(ProductSubcategory $currentProductType, Builder $builder)
    {
        if ($currentProductType->hasDependencies()) {
            $dependencies = $currentProductType->getDependencies();

            foreach ($dependencies as $dependency) {
                $dependencySubcategory = $dependency->getSubcategoryModelName();

                $dependencySubcategoryModelName = get_parent_class($dependencySubcategory);

                $dependencySubcategoryModel = new $dependencySubcategoryModelName;

                $dependencySubcategoryColumn = $dependencySubcategory::COLUMN;

                $quizRelationshipMethodName = $dependencySubcategoryModel->getQuizRelationshipMethodName();

                $userAnswerValue = $this->quiz->$quizRelationshipMethodName->$dependencySubcategoryColumn;

                $subcategoryKeys = explode('|', $userAnswerValue);

                error_log("Looking for products of category: [{$dependency->getName()} ({$dependency->getId()})] for user: [{$this->user->id}]");
                Log::info("Looking for products of category: [{$dependency->getName()} ({$dependency->getId()})] for user: [{$this->user->id}]");

                $subcategoriesIds = $dependency->getSubcategoryIdsByUserAnswers($subcategoryKeys);

                var_dump('subcategoryKeys', $subcategoryKeys);
                print_r($subcategoriesIds);

                // $relProductCategories = $builder
                //                         ->where('category_id', $dependency->getId())
                //                         ->whereIn('subcategory_id', $dependency->getSubcategoryIdsByUserAnswers($subcategoryKeys))
                //                         ->get();

                // print_r($relProductCategories); exit;
                // $productIds = array_map(function($value) use ($currentProductType, $dependency) {

                //     if ($relProductCategories->first()) {
                //         return $relProductCategories->first()->product_id;
                //     }
                // }, $subcategoryKeys);
            }
        }
    }

    public function getRelProductCategoriesBuilderByTypeAndSubcategoryId(Int $subcategoryId): Builder
    {
        return RelProductsCategories::where('category_id', LuProductCategories::TYPE)
                                    ->where('subcategory_id', $subcategoryId);
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









