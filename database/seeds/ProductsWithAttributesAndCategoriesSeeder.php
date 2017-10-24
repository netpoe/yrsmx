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
    Product\ProductsInfoAdapter as ProductsInfo,
    Product\ProductsCostAdapter as ProductsCost,
    User\UserProductsAdapter as UserProducts,
    Product\ProductsCategoriesAdapter as ProductsCategories,
    Product\ProductsAttributesAdapter as ProductsAttributes,
    Dictionary\DictProductCategoriesAdapter as DictProductCategories,
    Dictionary\DictProductSubcategoriesAdapter as DictProductSubcategories,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes,
    Dictionary\DictProductSubattributesAdapter as DictProductSubattributes,
    User\Style\Clothes,
    User\PreferredBodyParts\BodyType,
    User\Fit\LowerPartFit,
    User\Fit\UpperPartFit,
    User\Fit\PantsFitHips,
    User\Fit\PantsFitShape,
    User\Style\Risk,
    User\Sizes\BlouseSizes,
    User\Sizes\BraBandSizes,
    User\Sizes\BraCupsSizes,
    User\Sizes\DressSizes,
    User\Sizes\PantsSizes,
    User\Sizes\ShoesSizes,
    User\Sizes\SkirtSizes,
    User\Style\Colors,
    User\Style\Shoes,
    User\Style\Prints,
    User\Style\Accessories,
    User\Style\Fabrics,
    User\Style\Words,
    User\PreferredBodyParts\BodyPart,
    User\Style\Jewelry,
    OutfitType,
    Product\ProductsGalleryAdapter as ProductsGallery
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

            $this->shuffleProductSubcategories($product, (new ProductCategory(DictProductCategories::BODY_TYPE))->subcategories());

            $this->shuffleProductSubcategories($product, (new ProductCategory(DictProductCategories::RISK))->subcategories());

            $attribute = new ProductAttribute(DictProductAttributes::COLORS);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::PRINTS);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::FABRICS);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::WORDS);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::BODY_PART);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::JEWELRY);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);

            $attribute = new ProductAttribute(DictProductAttributes::OUTFIT_TYPE);
            $subattributeIds = $this->shuffleProductSubattributes($product, $attribute);
            $this->addProductAttributes($product, $attribute, $subattributeIds);
        }
    }

    public function addRandomClothTypeToProduct(Product $product)
    {
        $this->category = new ProductCategory(DictProductCategories::TYPE);

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
        $cost = rand(50, 500);

        $product = Product::create([
            'uploaded_by' => 1,
            ]);

        ProductsInfo::create([
            'product_id' => $product->id,
            'stock' => rand(1, 5),
        ]);

        ProductsCost::create([
            'product_id' => $product->id,
            'cost' => $cost,
            'price' => $cost * (1 + (rand(3, 25) / 100)),
            'discount' => rand(0, 1) ? (rand(3, 25) / 100) : null,
        ]);

        ProductsGallery::create([
            'product_id' => $product->id,
            'file_src' => $fileSrc,
            'filename' => 'product-' . rand(1, 100) . '.png',
            ]);

        return $product;
    }

    public function addProductSubcategory(Product $product, ProductSubcategory $subcategory)
    {
        ProductsCategories::create([
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
            ProductsAttributes::create([
                'product_id' => $product->id,
                'attribute_id' => $attribute->getId(),
                'subattribute_id' => $subattributeId,
                ]);
        }

        return $this;
    }
}













