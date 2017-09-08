<?php

namespace App\Model;

use App\Model\{
    RelProductsOutfitAdapter as ProductsOutfit,
    RelProductsCategoriesAdapter as RelProductsCategories,
    RelProductsAttributesAdapter as RelProductsAttributes
};

class ProductsAdapter extends Products
{
    public function getUnassignedProducts()
    {
        $assignedProducts = ProductsOutfit::pluck('product_id')->all();

        return $this->whereNotIn('products.id', $assignedProducts)
            ->join('rel_products_gallery', 'rel_products_gallery.product_id', 'products.id')
            ->where('stock', '>', 0)
            ->groupBy('rel_products_gallery.product_id')
            ->get();
    }

    public function assignCategories(Array $categories)
    {
        foreach ($categories as $categoryId => $subcategoryId) {
            RelProductsCategories::create([
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
                RelProductsAttributes::create([
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
            'rel_products_attributes', 'rel_products_attributes.subattribute_id', 'lu_product_subattributes.id')
            ->where('rel_products_attributes.product_id', $this->id)
            ->get();
    }

    public function subcategories()
    {
        return \App\Model\LuProductSubcategoriesAdapter::join(
            'rel_products_categories', 'rel_products_categories.subcategory_id', 'lu_product_subcategories.id')
            ->where('rel_products_categories.product_id', $this->id)
            ->get();
    }
}
