<?php

namespace App\Model;

use App\Entities\Cart;
use App\Model\UserCartsAdapter as UserCart;

class OrdersAdapter extends Orders
{
    const TYPE_PAYPAL = 'paypal';

    public function getCart()
    {
        $productsInCart = $this->user
                        ->products()
                        ->where('cart_id', $this->cart_id)
                        ->get();

        $cart = UserCart::where('id', $this->cart_id)->first();

        return new Cart($productsInCart, $cart);
    }
}
