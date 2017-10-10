<?php

namespace App\Model;

use App\Model\{
    RelProductsOutfitAdapter as ProductsOutfit,
    ProductsCategoriesAdapter as ProductsCategories,
    ProductsAttributesAdapter as ProductsAttributes
};

use App\Util\NumberUtil;

class ProductsAdapter extends Products
{
    public function getUnassignedProducts()
    {
        $assignedProducts = ProductsOutfit::pluck('product_id')->all();

        return $this->whereNotIn('products.id', $assignedProducts)
            ->join('products_gallery', 'products_gallery.product_id', 'products.id')
            ->where('stock', '>', 0)
            ->groupBy('products_gallery.product_id')
            ->get();
    }

    public function assignCategories(Array $categories)
    {
        foreach ($categories as $categoryId => $subcategoryId) {
            ProductsCategories::create([
                'product_id' => $this->id,
                'category_id' => $categoryId,
                'subcategory_id' => $subcategoryId,
                ]);
        }

        return $this;
    }

    public function assignAttributes(Array $attributes)
    {
        foreach ($attributes as $attributeId => $attribute) {
            foreach ($attribute as $subattributeId) {
                ProductsAttributes::create([
                    'product_id' => $this->id,
                    'attribute_id' => $attributeId,
                    'subattribute_id' => $subattributeId,
                    ]);
            }
        }

        return $this;
    }

    public function subattributes()
    {
        return \App\Model\LuProductSubattributesAdapter::join(
            'products_attributes', 'products_attributes.subattribute_id', 'lu_product_subattributes.id')
            ->where('products_attributes.product_id', $this->id)
            ->get();
    }

    public function subcategories()
    {
        return \App\Model\LuProductSubcategoriesAdapter::join(
            'products_categories', 'products_categories.subcategory_id', 'lu_product_subcategories.id')
            ->where('products_categories.product_id', $this->id)
            ->get();
    }

    public function price()
    {
        return new NumberUtil($this->price);
    }

    public function discount()
    {
        return new NumberUtil($this->discount);
    }
}
