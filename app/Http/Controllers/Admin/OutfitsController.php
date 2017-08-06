<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\ProductsService;
use App\Model\RelProductsOutfitAdapter as ProductsOutfit;
use App\Model\ProductsAdapter as Product;
use App\Model\OutfitsAdapter as Outfit;
use App\Model\UserAdapter as User;
use Auth;

class OutfitsController extends Controller
{
    public function create(Request $request, ProductsOutfit $po, User $user)
    {
        $outfit = new Outfit;

        $outfit->user_id = $user->id;

        $outfit->save();

        $po->assignProductsToOutfit($request->input('products'), $outfit, $user);

        return redirect()->back();
    }
}
