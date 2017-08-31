<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

use App\Entities\{
    ProductCategory,
    ProductSubcategory,
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
    UserStyle\Shoes,
    UserStyle\Prints,
    UserStyle\Accessories,
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

    protected $category;

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

            $this->addRandomClothTypeToProduct($product);

            if ($this->subcategory->hasDependencies()) {
                $this->shuffleProductSubcategoryDependencies($product);
            }

            $this->shuffleProductSubcategories($product, (new ProductCategory(LuProductCategories::BODY_TYPE))->subcategories());

            $this->shuffleProductSubcategories($product, (new ProductCategory(LuProductCategories::RISK))->subcategories());

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

    public function addRandomClothTypeToProduct(Product $product)
    {
        $this->category = new ProductCategory(LuProductCategories::TYPE);

        $clothes = $this->category->subcategories();

        $i = rand(0, count($clothes) - 1);

        $this->subcategory = $clothes[$i];

        $this->addProductSubcategory($product, $this->subcategory);

        return $this;
    }

    public function shuffleProductSubcategoryDependencies(Product $product)
    {
        $dependencies = $this->subcategory->getDependencies();

        foreach ($dependencies as $dependency) {
            $this->shuffleProductSubcategories($product, $dependency->subcategories());
        }

        return $this;
    }

    public function shuffleProductSubcategories(Product $product, Array $subcategories)
    {
        $i = rand(0, count($subcategories) - 1);

        $this->addProductSubcategory($product, $subcategories[$i]);

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

    public function addProductSubcategory(Product $product, ProductSubcategory $subcategory)
    {
        RelProductsCategories::create([
            'product_id' => $product->id,
            'category_id' => $subcategory->getCategoryId(),
            'subcategory_id' => $subcategory->getId(),
            ]);

        return $this;
    }

    public function shuffleProductSubattributes(Product $product, ProductAttribute $attribute)
    {
        $subattributes = $attribute->subattributes();

        $ids = [];

        while (count($ids) < 3) {
            $i = rand(1, count($subattributes) - 1);

            $subattribute = $subattributes[$i];

            if (!in_array($subattribute->getId(), $ids)) {
                $ids[] = $subattribute->getId();
            }
        }

        return $ids;
    }

    public function addProductAttributes(Product $product, ProductAttribute $attribute, Array $subattributeIds)
    {
        foreach ($subattributeIds as $subattributeId) {
            RelProductsAttributes::create([
                'product_id' => $product->id,
                'attribute_id' => $attribute->getId(),
                'subattribute_id' => $subattributeId,
                ]);
        }

        return $this;
    }
}













