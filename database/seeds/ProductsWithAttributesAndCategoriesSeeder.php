<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

use App\Entities\{
    ProductCategory,
    ProductAttribute
};

use App\Model\{
    UserAdapter as User,
    ProductsAdapter as Product,
    UserProductsAdapter as UserProducts,
    RelProductsCategoriesAdapter as RelProductsCategories,
    RelProductsAttributesAdapter as RelProductsAttributes,
    LuProductCategoriesAdapter as LuProductCategories,
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductAttributesAdapter as LuProductAttributes,
    LuProductSubattributesAdapter as LuProductSubattributes,
    UserStyle\Clothes,
    UserPreferredBodyParts\BodyType,
    UserFit\LowerPartFit,
    UserFit\UpperPartFit,
    UserFit\PantsFitHips,
    UserFit\PantsFitShape,
    UserStyle\Risk,
    UserSizes\BlouseSizes,
    UserSizes\BraBandSizes,
    UserSizes\BraCupsSizes,
    UserSizes\DressSizes,
    UserSizes\PantsSizes,
    UserSizes\ShoesSizes,
    UserSizes\SkirtSizes,
    UserStyle\Colors,
    UserStyle\Prints,
    UserStyle\Fabrics,
    UserStyle\Words,
    Product\BodyPart,
    UserStyle\Jewelry,
    OutfitType,
    RelProductsGalleryAdapter as RelProductsGallery
};

class ProductsWithAttributesAndCategoriesSeeder extends Seeder
{
    const PRODUCT_IMAGES = [
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/B1.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/B2.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/BR1.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/J9.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/C2.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/N4.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/b7.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/P6.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/SH2.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/P8.png',
        'https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/SH6.png',
    ];

    protected $categoryId;

    protected $subcategory;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::PRODUCT_IMAGES as $fileSrc) {
            $product = $this->createProduct($fileSrc);

            $this->shuffleProductSubcategory($product, LuProductCategories::TYPE, Clothes::class);

            if ($this->subcategory == Clothes::VESTIDOS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_DRESS, DressSizes::class);
            }

            if ($this->subcategory == Clothes::CHAMARRAS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::SHORTS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::LOWER_PART_FIT, LowerPartFit::class);
            }

            if ($this->subcategory == Clothes::CAMISAS_DE_VESTIR) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::BLUSAS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_BLOUSE, BlouseSizes::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::PLAYERAS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::GABARDINAS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::SACOS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::FALDAS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::LOWER_PART_FIT, LowerPartFit::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_SKIRT, SkirtSizes::class);
            }

            if ($this->subcategory == Clothes::PANTALONES_CASUALES) {
                $this->shuffleProductSubcategory($product, LuProductCategories::PANTS_FIT_SHAPE, PantsFitShape::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::PANTS_FIT_HIPS, PantsFitHips::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_PANTS, PantsSizes::class);
            }

            if ($this->subcategory == Clothes::TRAJE_SASTRE) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::ABRIGOS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            if ($this->subcategory == Clothes::JUMPSUITS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_DRESS, DressSizes::class);
            }

            if ($this->subcategory == Clothes::CROP_TOPS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_BLOUSE, BlouseSizes::class);
            }

            if ($this->subcategory == Clothes::LEGGINGS) {
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_SKIRT, SkirtSizes::class);
            }

            if ($this->subcategory == Clothes::PANTALONES_DE_VESTIR) {
                $this->shuffleProductSubcategory($product, LuProductCategories::PANTS_FIT_SHAPE, PantsFitShape::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::PANTS_FIT_HIPS, PantsFitHips::class);
                $this->shuffleProductSubcategory($product, LuProductCategories::SIZE_PANTS, PantsSizes::class);
            }

            if ($this->subcategory == Clothes::SUETERES) {
                $this->shuffleProductSubcategory($product, LuProductCategories::UPPER_PART_FIT, UpperPartFit::class);
            }

            $this->shuffleProductSubcategory($product, LuProductCategories::BODY_TYPE, BodyType::class);
            $this->shuffleProductSubcategory($product, LuProductCategories::RISK, Risk::class);

                $attribute = new ProductAttribute(LuProductAttributes::COLORS);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::PRINTS);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::FABRICS);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::WORDS);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::BODY_PART);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::JEWELRY);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);

                $attribute = new ProductAttribute(LuProductAttributes::OUTFIT_TYPE);
                $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
                $this->addProductAttributes($product, $attribute, $subattributeIds);
        }
    }

    public function shuffleProductSubcategory(Product $product, Int $categoryId, String $subcategoryClass)
    {
        $category = new ProductCategory($categoryId);

        $this->categoryId = $categoryId;

        $subcategories = $subcategoryClass::getOptions();

        $subcategory = $subcategories[rand(1, count($subcategories) - 1)]['key'];

        $this->subcategory = $subcategory;

        $this->addProductCategory($product, $category->setProductSubcategory($subcategoryClass, $subcategory));

        return $this;
    }

    public function createProduct(String $fileSrc)
    {
        $product = Product::create([
            'stock' => rand(1, 5),
            'uploaded_by' => 1,
            ]);

        RelProductsGallery::create([
            'product_id' => $product->id,
            'file_src' => $fileSrc,
            'filename' => 'product-' . rand(1, 100) . '.png',
            ]);

        return $product;
    }

    public function addProductCategory(Product $product, ProductCategory $category)
    {
        $subcategoryId = LuProductSubcategories::getSubcategoryId(
                                                    $category->id,
                                                    $category->subcategoryClass,
                                                    $category->subcategory);

        RelProductsCategories::create([
            'product_id' => $product->id,
            'category_id' => $category->id,
            'subcategory_id' => $subcategoryId,
            ]);

        return $this;
    }

    public function shuffleProductSubattributes(Product $product, ProductAttribute $attribute)
    {
        $subattributes = LuProductSubattributes::getOptions();

        $filtered = array_values(array_filter($subattributes, function($subattribute) use ($attribute, $subattributes) {
            return $subattribute['attribute_id'] == $attribute->id;
        }));

        $ids = [];

        while (count($ids) < 3) {
            $i = rand(1, count($filtered) - 1);

            $value = $filtered[$i]['value'];

            $luProductSubattributeId = LuProductSubattributes::where('attribute_id', $attribute->id)
                                                        ->where('value', $value)
                                                        ->first()
                                                        ->id;

            if (!in_array($luProductSubattributeId, $filtered)) {
                $ids[] = $luProductSubattributeId;
            }
        }

        return $ids;
    }

    public function addProductAttributes(Product $product, ProductAttribute $attribute, Array $subattributeIds)
    {
        foreach ($subattributeIds as $subattributeId) {
            RelProductsAttributes::create([
                'product_id' => $product->id,
                'attribute_id' => $attribute->id,
                'subattribute_id' => $subattributeId,
                ]);
        }

        return $this;
    }
}













