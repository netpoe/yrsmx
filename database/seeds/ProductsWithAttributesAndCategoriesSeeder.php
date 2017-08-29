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
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = $this->createProduct('https://s3-us-west-2.amazonaws.com/dev-products-catalog/2017-08-24/B1.png');

        $category = new ProductCategory(LuProductCategories::TYPE);
        $this->addProductCategory($product, $category->setProductSubcategory(Clothes::class, Clothes::BLUSAS));

        $category = new ProductCategory(LuProductCategories::BODY_TYPE);
        $this->addProductCategory($product, $category->setProductSubcategory(BodyType::class, BodyType::TRIANGLE));

        $category = new ProductCategory(LuProductCategories::UPPER_PART_FIT);
        $this->addProductCategory($product, $category->setProductSubcategory(UpperPartFit::class, UpperPartFit::LOOSE));

        $category = new ProductCategory(LuProductCategories::RISK);
        $this->addProductCategory($product, $category->setProductSubcategory(Risk::class, Risk::CLASSIC));

        $category = new ProductCategory(LuProductCategories::SIZE_BLOUSE);
        $this->addProductCategory($product, $category->setProductSubcategory(BlouseSizes::class, BlouseSizes::ECH));

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













