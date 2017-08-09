<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class LuProductAttributesAdapter extends LuProductAttributes implements InputOptionsContract
{
    use InputOptionsTrait;

    const COLORS = 1;
    const PRINTS = 2;
    const FABRICS = 3;
    const WORDS = 4;
    const CLOTHES = 5;
    const RISK = 6;
    const SHOES = 7;
    const JEWELRY = 8;
    const ACCESSORIES = 9;
    const SIZE_DRESS = 10;
    const SIZE_BLOUSE = 11;
    const SIZE_BRA_BAND = 12;
    const SIZE_BRA_CUPS = 13;
    const SIZE_SKIRT = 14;
    const SIZE_SHOES = 15;
    const SIZE_PANTS = 16;

    const OPTIONS = [
        [
            'key' => self::COLORS,
            'value' => 'colors',
        ],
        [
            'key' => self::PRINTS,
            'value' => 'prints',
        ],
        [
            'key' => self::FABRICS,
            'value' => 'fabrics',
        ],
        [
            'key' => self::WORDS,
            'value' => 'words',
        ],
        [
            'key' => self::CLOTHES,
            'value' => 'clothes',
        ],
        [
            'key' => self::RISK,
            'value' => 'risk',
        ],
        [
            'key' => self::SHOES,
            'value' => 'shoes',
        ],
        [
            'key' => self::JEWELRY,
            'value' => 'jewelry',
        ],
        [
            'key' => self::ACCESSORIES,
            'value' => 'accessories',
        ],
        [
            'key' => self::SIZE_DRESS,
            'value' => 'size_dress',
        ],
        [
            'key' => self::SIZE_BLOUSE,
            'value' => 'size_blouse',
        ],
        [
            'key' => self::SIZE_BRA_BAND,
            'value' => 'size_bra_band',
        ],
        [
            'key' => self::SIZE_BRA_CUPS,
            'value' => 'size_bra_cups',
        ],
        [
            'key' => self::SIZE_SKIRT,
            'value' => 'size_skirt',
        ],
        [
            'key' => self::SIZE_SHOES,
            'value' => 'size_shoes',
        ],
        [
            'key' => self::SIZE_PANTS,
            'value' => 'size_pants',
        ],
    ];

}













