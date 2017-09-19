<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Collection;

use App\Util\NumberUtil;

class Cart
{
    const TAX_RATE = 0.16;

    public $products;

    public function __construct(Collection $products)
    {
        $this->products = $products;
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
        $total = $this->getSubtotal()->get() - $this->getDiscount()->get();

        $total = $total * (1 + self::TAX_RATE);

        return new NumberUtil($total);
    }
}
