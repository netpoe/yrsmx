<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Model\{
    ProductsAdapter as Products,
    User\UserProductsAdapter as UserProducts
};

class UserOutfits extends Model
{
    protected $table = 'user_outfits';

    protected $fillable = [
        'user_id',
    ];

    public function products()
    {
        return Products::join('user_products', 'user_products.product_id', 'products.id')
                        ->where('user_products.outfit_id', $this->id)
                        ->select('products.*', 'user_products.cart_id', 'user_products.amount');
    }
}
