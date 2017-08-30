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

        $quiz = $this->user->getLatestQuiz();

        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::VESTIDOS);
        $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
        $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_DRESS, DressSizes::class);

        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::CHAMARRAS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::SHORTS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::CAMISAS_DE_VESTIR);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::BLUSAS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::PLAYERAS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::GABARDINAS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::SACOS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::FALDAS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::PANTALONES_CASUALES);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::TRAJE_SASTRE);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::ABRIGOS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::JUMPSUITS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::CROP_TOPS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::LEGGINGS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::PANTALONES_DE_VESTIR);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::SUETERES);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::JEANS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::TRAJES_DE_BANO);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::BODIES);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::BRALETTES);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::ZAPATOS);
        $this->assign(LuProductCategories::TYPE, Clothes::class, Clothes::ACCESORIOS);

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

            if (!$productId) {
                $count++; continue;
            }

            if ($previousProductId == $productId) {
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









