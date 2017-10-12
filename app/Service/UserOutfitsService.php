<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Collection;

use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories,
    User\Style\Clothes,
    ProductsAdapter as Products,
    UserOutfitsAdapter as UserOutfits
};

/**
 * UserOutfitsService shuffles the latest user outfit selection
 * by product cloth type and returns a collection of outfits
 * with product adapters with a zIndex and position property
 */
class UserOutfitsService
{
    const MAIN_UPPER_TYPES = [
        Clothes::VESTIDOS,
        Clothes::BLUSAS,
        Clothes::PLAYERAS,
    ];

    const SIDE_UPPER_TYPES = [
        Clothes::CHAMARRAS,
        Clothes::CAMISAS_DE_VESTIR,
        Clothes::GABARDINAS,
        Clothes::SACOS,
        Clothes::TRAJE_SASTRE,
        Clothes::ABRIGOS,
        Clothes::SUETERES,
    ];

    const EXTRAS = [
        Clothes::ACCESORIOS,
        Clothes::BRALETTES,
        Clothes::JUMPSUITS,
        Clothes::BODIES,
        Clothes::CROP_TOPS,
    ];

    const MAIN_LOWER_TYPES = [
        Clothes::SHORTS,
        Clothes::FALDAS,
        Clothes::PANTALONES_CASUALES,
        Clothes::PANTALONES_DE_VESTIR,
        Clothes::JEANS,
        Clothes::TRAJES_DE_BANO,
    ];

    const SIDE_LOWER_TYPES = [
        Clothes::LEGGINGS,
        Clothes::ZAPATOS,
    ];

    public $outfits = [];

    public $currentOutfit;

    public $products;

    public $currentProduct;

    public $currentProductKey;

    public $productTypes;

    public $userOutfits;

    public function __construct(UserOutfits $userOutfits)
    {
        $this->userOutfits = $userOutfits;
    }

    public function shuffle()
    {
        $this->products = $this->userOutfits->products()->get()->shuffle();

        $this->productTypes = new ProductCategory(LuProductCategories::TYPE);

        while (!$this->products->isEmpty()) {
            $this->outfits[] = $this->getOutfit();
        }

        return $this;
    }

    public function getOutfit()
    {
        $currentOutfit = new Collection;

        $types = [
            self::MAIN_UPPER_TYPES,
            self::MAIN_LOWER_TYPES,
            self::SIDE_UPPER_TYPES,
            self::SIDE_LOWER_TYPES,
            self::EXTRAS,
        ];

        for ($i = 0; $i < count($types)-1; $i++) {
            $this->products->each(function($product, $key) use (&$currentOutfit, $types, $i) {
                $this->currentProduct = $product;

                if ($this->productBelongsTo($types[$i])) {
                    $this->currentProduct->relations = [];

                    $this->products->forget($key);

                    $currentOutfit->push($this->currentProduct);

                    return false;
                }
            });
        }

        return $currentOutfit;
    }

    public function getProduct()
    {
        return $this->products->random();
    }

    public function productBelongsTo(Array $types): bool
    {
        $belongsTo = false;

        $this->currentProduct->categories->each(function($category) use ($types, &$belongsTo) {
            $key = $category->subcategory->key;

            if (in_array($key, $types)) {
                $belongsTo = true;

                $this->currentProduct->subcategory = $this->productTypes->getSubcategoryByKey($key);
            }
        });

        return $belongsTo;
    }
}
