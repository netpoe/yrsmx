<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Entities\Cart;
use App\Form\Front\ShippingAddressForm;
use App\Util\DateTimeUtil;
use App\Http\Request\ShippingAddressRequest;

class ShippingController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $productsInCart = $user->latestOutfit()->getProductsInCart();

        $cart = new Cart($productsInCart, $user->latestCart());

        $userAddressForm = new ShippingAddressForm;

        $userAddressForm->setFields();

        $params = compact('user', 'cart', 'userAddressForm');

        return view('front.shipping.show', $params);
    }

    public function setCartAddress(Request $request)
    {
        $user = Auth::user();

        $user->latestCart()
            ->update([
                'user_address_id' => $request->input('user-address-id'),
            ]);

        return redirect()->route('front.shipping.show');
    }

    public function addAddress(ShippingAddressRequest $request)
    {
        $user = Auth::user();

        $userAddress = $user->createEmptyAddress();

        $userAddress->fill([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'street' => $request->street,
            'interior' => $request->interior,
            'neighborhood' => $request->neighborhood,
            'updated_at' => DateTimeUtil::DBNOW(),
            ])
            ->save();

        $user->latestCart()
            ->update([
                'user_address_id' => $userAddress->id
            ]);

        return redirect()->route('front.shipping.show');
    }
}
