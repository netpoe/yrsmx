<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class ProductType extends Model implements InputOptionsContract
{
    use InputOptionsTrait;

    const BRA = 1;
    const DRESS = 2;
    const SKIRT = 3;
    const SHOES = 4;
    const PANTS = 5;
    const ACCESSORY = 6;
    const JEWEL = 7;

    const OPTIONS = [
        self::BRA => [
            'key' => self::BRA,
            'value' => 'bra',
        ],
        self::DRESS => [
            'key' => self::DRESS,
            'value' => 'vestido',
        ],
        self::SKIRT => [
            'key' => self::SKIRT,
            'value' => 'falda',
        ],
        self::SHOES => [
            'key' => self::SHOES,
            'value' => 'zapatos',
        ],
        self::PANTS => [
            'key' => self::PANTS,
            'value' => 'pantalón',
        ],
        self::ACCESSORY => [
            'key' => self::ACCESSORY,
            'value' => 'accesorio',
        ],
        self::JEWEL => [
            'key' => self::JEWEL,
            'value' => 'joya',
        ],
    ];
}
