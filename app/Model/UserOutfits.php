<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    ProductsAdapter as Products,
    UserProductsAdapter as UserProducts
};

class UserOutfits extends Model
{
    protected $table = 'user_outfits';

    protected $fillable = [
        'user_id',
    ];

    public function products()
    {
        return UserProducts::join('products', 'products.id', 'user_products.product_id')
                        ->where('user_products.outfit_id', $this->id);
    }
}
