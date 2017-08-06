<?php

namespace App\Model;

use App\Model\RelProductsOutfitAdapter as ProductsOutfit;

class ProductsAdapter extends Products
{
    public function getUnassignedProducts()
    {
        $assignedProducts = ProductsOutfit::pluck('product_id')->all();

        return $this->whereNotIn('products.id', $assignedProducts)
            ->join('rel_products_gallery', 'rel_products_gallery.product_id', 'products.id')
            ->where('stock', '>', 0)
            ->get();
    }
}
