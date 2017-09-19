<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

use App\Entities\Cart;

use App\Model\{
    UserAdapter as User,
    UserOutfitsAdapter as UserOutfits,
    UserProductsAdapter as UserProducts
};

class CartController extends Controller
{
    /**
     * show Displays the latest user outfit products
     * with cart_id NOT NULL
     * @return view
     */
    public function show()
    {
        $user = Auth::user();

        $productsInCart = $user->latestOutfit()->getProductsInCart();

        $cart = new Cart($productsInCart);

        $params = compact('user', 'productsInCart', 'cart');

        return view('front.cart.show', $params);
    }

    /**
     * addProductsToCart Gets the latest outfit productIds from the request
     * and adds the cart_id to the user_products table to present them in the cart
     * @param Request $request [description]
     * @return redirect
     */
    public function addProductsToCart(Request $request)
    {
        $user = Auth::user();

        $products = $request->products;

        if ($products) {
            $user->latestOutfit()
                ->products()
                ->whereIn('product_id', $products)
                ->update([
                    'cart_id' => $user->latestCart()->id,
                    'amount' => 1,
                ]);
        }

        return redirect()->route('front.cart.show');
    }
}
