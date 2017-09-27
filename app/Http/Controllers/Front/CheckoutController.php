<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Entities\Cart;

class CheckoutController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $productsInCart = $user->latestOutfit()->getProductsInCart();

        $cart = new Cart($productsInCart, $user->latestCart());

        $userAddress = $user->latestCart()->userAddress;

        $params = compact('user', 'cart', 'userAddress', 'productsInCart');

        return view('front.checkout.show', $params);
    }

    public function processPayment(Request $request)
    {
        print_r($request->all()); exit;
    }
}
