<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Collection;

use App\Util\NumberUtil;
use App\Model\UserCartsAdapter as UserCart;
use App\Service\ShippingService;

use Netpoe\EstafetaAPI\{
    ServiceType
};

class Cart
{
    const TAX_RATE = 0.16;

    const DEFAULT_SHIPPING_COST = 250;

    public $products;

    public $userCart;

    public function __construct(Collection $products, UserCart $userCart = null)
    {
        $this->products = $products;

        $this->userCart = $userCart;
    }

    public function hasShippingAddress(): bool
    {
        return $this->userCart && $this->userCart->userAddress;
    }

    public function calcShipping(): ServiceType
    {
        $shippingService = new ShippingService;

        $destinyZipCode = $this->userCart->userAddress->zip_code;

        $shippingService->setDestinyZipCode($destinyZipCode);

        $quotation = $shippingService->calcShipping();

        return $quotation->getQuotation()->getGroundShippingCost();
    }

    public function getShipping()
    {
        $subtotal = 0;

        if (!$this->hasShippingAddress()) {
            return new NumberUtil($subtotal);
        }

        $totalCost = $this->calcShipping()->totalCost;

        if (!$totalCost) {
            return new NumberUtil(self::DEFAULT_SHIPPING_COST);
        }

        return new NumberUtil($totalCost);
    }

    public function getSubtotal()
    {
        $subtotal = 0;

        $this->products->each(function($product) use (&$subtotal) {
            $subtotal += $product->price;
        });

        return new NumberUtil($subtotal);
    }

    public function getDiscount()
    {
        $subtotal = 0;

        $this->products->each(function($product) use (&$subtotal) {
            if ($product->discount) {
                $subtotal += ($product->price * $product->discount);
            }
        });

        return new NumberUtil($subtotal);
    }

    public function getTotalPlusTaxes()
    {
        $total = $this->getSubtotal()->raw() - $this->getDiscount()->raw() + $this->getShipping()->raw();

        $total = $total * (1 + self::TAX_RATE);

        return new NumberUtil($total);
    }
}
