<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\{
    UserAdapter as User,
    UserOutfitsAdapter as UserOutfits
};

class UserController extends Controller
{
    /**
     * latestOutfit Displays the user latest outfit selection
     * @return view
     */
    public function latestOutfit(User $user, UserOutfits $outfit)
    {
        // print_r($user->latestOutfit()->shuffleProductsAndMakeOutfits());

        return view('front.user.latest-outfit', [
            'user' => $user,
            'userOutfits' => $user->latestOutfit()->shuffleProductsAndMakeOutfits()->getOutfits(),
            ]);
    }
}
