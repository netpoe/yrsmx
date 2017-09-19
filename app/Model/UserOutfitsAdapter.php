<?php

namespace App\Model;

use App\Service\UserOutfitsService;

class UserOutfitsAdapter extends UserOutfits
{
    public $userOutfitsService;

    public function getOutfits()
    {
        return $this->userOutfitsService->outfits;
    }

    public function shuffleProductsAndMakeOutfits()
    {
        $this->userOutfitsService = new UserOutfitsService($this);

        $this->userOutfitsService->shuffle();

        return $this;
    }

    public function getProductsInCart()
    {
        return $this->products()->whereNotNull('cart_id')->get();
    }
}
