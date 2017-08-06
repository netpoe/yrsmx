<?php

namespace App\Model;

use App\Model\OutfitsAdapter as Outfit;
use App\Model\UserAdapter as User;
use Auth;

class RelProductsOutfitAdapter extends RelProductsOutfit
{
    public function assignProductsToOutfit(Array $productIds = [], OutfitsAdapter $outfit)
    {
        foreach ($productIds as $id) {
            $this->create([
                'outfit_id' => $outfit->id,
                'product_id' => $id,
                ]);
        }

        return $this;
    }
}
