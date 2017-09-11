<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    ProductsAdapter as Products
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
                    ->with(['categories', 'attributes'])
                    ->get();
    }
}
