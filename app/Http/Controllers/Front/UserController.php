<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

use App\Model\{
    UserAdapter as User,
    UserOutfitsAdapter as UserOutfits,
    User\UserProductsAdapter as UserProducts
};

class UserController extends Controller
{
    /**
     * latestOutfit Displays the user latest outfit selection
     * @return view
     */
    public function latestOutfit()
    {
        $user = Auth::user();

        return view('front.user.latest-outfit', [
            'user' => $user,
            'userOutfits' => $user->latestOutfit()->shuffleProductsAndMakeOutfits()->getOutfits(),
            ]);
    }
}
