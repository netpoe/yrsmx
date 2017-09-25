<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Entities\Cart;
use App\Form\Front\ShippingAddressForm;

class ShippingController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $productsInCart = $user->latestOutfit()->getProductsInCart();

        $cart = new Cart($productsInCart);

        $userAddressForm = new ShippingAddressForm;

        $userAddressForm->setFields();

        $params = compact('user', 'cart', 'userAddressForm');

        return view('front.shipping.show', $params);
    }

    public function addAddress(Request $request)
    {

    }
}
