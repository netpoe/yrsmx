<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

use App\Entities\{
    ProductCategory,
    ProductSubcategory,
    ProductAttribute,
    ProductSubattribute
};

use App\Model\{
    UserAdapter as User,
    ProductsAdapter as Products,
    UserProductsAdapter as UserProducts,
    RelProductsCategoriesAdapter as RelProductsCategories,
    RelProductsAttributesAdapter as RelProductsAttributes,
    LuProductCategoriesAdapter as LuProductCategories,
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductAttributesAdapter as LuProductAttributes,
    LuProductSubattributesAdapter as LuProductSubattributes,
    UserStyle\Clothes
};

class UserProductsService
{
    const PRODUCTS_COUNT = 3;

    protected $user;

    protected $quiz;

    public $currentProductType;

    public $currentProductTypeIndex = -1;

    public $productsCollection;

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->quiz = $this->user->getLatestQuiz();
    }

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

        $this->currentProductType = $subcategories[$this->currentProductTypeIndex];

        error_log("Looking for products of TYPE: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] for user: [{$this->user->id}]");
        Log::info("Looking for products of TYPE: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] for user: [{$this->user->id}]");

        // $this->productsCollection = RelProductsCategories::join('products', 'products.id', 'rel_products_categories.product_id')
        //                                 ->where('products.stock', '>', 0)
        //                                 ->where('rel_products_categories.category_id', LuProductCategories::TYPE)
        //                                 ->where('rel_products_categories.subcategory_id', $this->currentProductType->getId())
        //                                 ->get();

        // $this->productsCollection = RelProductsCategories::with(['products' => function($query){
        //     $query->where('stock', '>', 0);
        // }])
        // ->where('category_id', LuProductCategories::TYPE)
        // ->where('subcategory_id', $this->currentProductType->getId())
        // ->get();

        $productsCollection = Products::with(['categories' => function($query){
                $query
                    ->where('category_id', LuProductCategories::TYPE)
                    ->where('subcategory_id', $this->currentProductType->getId());
            }])
            ->where('stock', '>', 0)
            ->get();

        $this->productsCollection = $productsCollection->filter(function($product){
            return !$product->categories->isEmpty();
        });

        // There's no product with this Cloth subcategory
        if ($this->productsCollection->isEmpty()) {
            error_log("No products of type: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] found for user: [{$this->user->id}]");
            Log::info("No products of type: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] found for user: [{$this->user->id}]");
            return $this->assignProductsToUser();
        }

        error_log("> Found [{$this->productsCollection->count()}] products of type: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] for user: [{$this->user->id}]");
        Log::info("> Found [{$this->productsCollection->count()}] products of type: [{$this->currentProductType->getValue()} (ID {$this->currentProductType->getId()})] for user: [{$this->user->id}]");

        if (!$this->currentProductType->hasDependencies()) {
            return $this->insertProductIds()
                        ->assignProductsToUser();
        }

        $this->findCategoryDependenciesForCurrentProductsCollection();

        if (!$this->productsCollection->isEmpty()) {
            $this->findSubattributeMatchesForCurrentProductsCollection();
        }
        //     ->insertProductIds();

        return $this->assignProductsToUser();
    }

    public function findCategoryDependenciesForCurrentProductsCollection()
    {
        $dependencies = $this->currentProductType->getDependencies();

        $dependencyCount = count($dependencies);

        error_log("Category [{$this->currentProductType->getValue()}] dependency count: [# {$dependencyCount}]");
        Log::info("Category [{$this->currentProductType->getValue()}] dependency count: [# {$dependencyCount}]");

        $this->productsCollection->each(function($product, $key) use ($dependencies) {
            foreach ($dependencies as $dependency) {
                $dependencySubcategory = $dependency->getSubcategoryModelName();

                $dependencySubcategoryModelName = get_parent_class($dependencySubcategory);

                $dependencySubcategoryModel = new $dependencySubcategoryModelName;

                $dependencySubcategoryColumn = $dependencySubcategory::COLUMN;

                $quizRelationshipMethodName = $dependencySubcategoryModel->getQuizRelationshipMethodName();

                $userAnswerValue = $this->quiz->$quizRelationshipMethodName->$dependencySubcategoryColumn;

                $subcategoriesIds = explode('|', $userAnswerValue);

                error_log("Looking for product [ID {$product->id}] to have category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");
                Log::info("Looking for product [ID {$product->id}] to have category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");

                $matchingProducts = $product->categories()
                                            ->where('category_id', $dependency->getId())
                                            ->whereIn('subcategory_id', $subcategoriesIds)
                                            ->get();

                if ($matchingProducts->isEmpty()) {
                    $this->productsCollection->forget($key);
                    error_log("Product [ID {$product->id}] has no category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");
                    Log::info("Product [ID {$product->id}] has no category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");
                    break;
                }

                error_log(">> Found a product [ID {$product->id}] with category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");
                Log::info(">> Found a product [ID {$product->id}] with category dependency: [{$dependency->getName()} (ID {$dependency->getId()})] for user: [{$this->user->id}]");
            }
        });

        return $this;
    }

    public function findSubattributeMatchesForCurrentProductsCollection()
    {
        $this->productsCollection->each(function($product, $key){
            foreach (LuProductAttributes::getOptions() as $attr) {
                if ($attr['key'] != LuProductAttributes::BODY_PART) {
                    $attribute = new ProductAttribute($attr['key']);

                    $subattributeModelName = $attribute->getSubattributeModelName();

                    $subattributeModel = new $subattributeModelName;

                    $subattributeColumn = $subattributeModel::COLUMN;

                    $quizRelationshipMethodName = $subattributeModel->getQuizRelationshipMethodName();

                    $userAnswerValue = $this->quiz->$quizRelationshipMethodName()->first()->$subattributeColumn;

                    error_log("Looking for product [ID {$product->id}] to have attribute: [{$attribute->getName()} (ID {$attribute->getId()})] subattributes [{$userAnswerValue}] for user: [{$this->user->id}]");
                    Log::info("Looking for product [ID {$product->id}] to have attribute: [{$attribute->getName()} (ID {$attribute->getId()})] subattributes [{$userAnswerValue}] for user: [{$this->user->id}]");

                    $subattributesIds = explode('|', $userAnswerValue);

                    $matchingProducts = $product->attributes()
                                                ->where('attribute_id', $attribute->getId())
                                                ->whereIn('subattribute_id', $subattributesIds)
                                                ->get();

                    if ($matchingProducts->isEmpty()) {
                        $this->productsCollection->forget($key);
                        error_log("Product [ID {$product->id}] has no attribute: [{$attribute->getName()} (ID {$attribute->getId()})] for user: [{$this->user->id}]");
                        Log::info("Product [ID {$product->id}] has no attribute: [{$attribute->getName()} (ID {$attribute->getId()})] for user: [{$this->user->id}]");
                        continue;
                    }

                    error_log(">>> Found a product [ID {$product->id}] with attribute: [{$attribute->getName()} (ID {$attribute->getId()})] for user: [{$this->user->id}]");
                    Log::info(">>> Found a product [ID {$product->id}] with attribute: [{$attribute->getName()} (ID {$attribute->getId()})] for user: [{$this->user->id}]");

                    // print_r($matchingProducts);

                    // print_r($this->productsCollection); exit;
                    // print_r($subattributesIds);
                }
            }
        });

        print_r($this->productsCollection);

        return $this;
    }

    public function insertProductIds()
    {
        $productIds = $this->productsCollection->pluck('product_id')->toArray();

        // print_r(array_unique($productIds));

        // foreach (array_unique($productIds) as $productId) {
        //     UserProducts::insert([
        //         'user_id' => $this->user->id,
        //         'product_id' => $productId
        //         ]);
        // }

        return $this;
    }
}









