<?php

namespace App\Model;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

class LuProductCategoriesAdapter extends LuProductCategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const TYPE = 1;
    const LOWER_PART_FIT = 2;
    const UPPER_PART_FIT = 3;
    const BODY_TYPE = 4;
    const PANTS_FIT_SHAPE = 5;
    const PANTS_FIT_HIPS = 6;
    const ACCESSORIES = 7;
    const RISK = 8;
    const SHOES = 9;
    const SIZE_DRESS = 10;
    const SIZE_BLOUSE = 11;
    const SIZE_BRA_BAND = 12;
    const SIZE_BRA_CUPS = 13;
    const SIZE_SKIRT = 14;
    const SIZE_SHOES = 15;
    const SIZE_PANTS = 16;

    const OPTIONS = [
        self::TYPE => [
            'key' => self::TYPE,
            'value' => 'Tipo de producto',
        ],
        self::LOWER_PART_FIT => [
            'key' => self::LOWER_PART_FIT,
            'value' => 'Fit parte inferior',
        ],
        self::UPPER_PART_FIT => [
            'key' => self::UPPER_PART_FIT,
            'value' => 'Fit parte superior',
        ],
        self::BODY_TYPE => [
            'key' => self::BODY_TYPE,
            'value' => 'Tipo de cuerpo',
        ],
        self::PANTS_FIT_SHAPE => [
            'key' => self::PANTS_FIT_SHAPE,
            'value' => 'Forma del pantalón',
        ],
        self::PANTS_FIT_HIPS => [
            'key' => self::PANTS_FIT_HIPS,
            'value' => 'Forma del pantalón (caderas)',
        ],
        self::ACCESSORIES => [
            'key' => self::ACCESSORIES,
            'value' => 'Accesorios',
        ],
        self::RISK => [
            'key' => self::RISK,
            'value' => 'Riesgo',
        ],
        self::SHOES => [
            'key' => self::SHOES,
            'value' => 'Zapatos',
        ],
        self::SIZE_DRESS => [
            'key' => self::SIZE_DRESS,
            'value' => 'Talla de vestido',
        ],
        self::SIZE_BLOUSE => [
            'key' => self::SIZE_BLOUSE,
            'value' => 'Talla de blusa',
        ],
        self::SIZE_BRA_BAND => [
            'key' => self::SIZE_BRA_BAND,
            'value' => 'Talla de bra (espalda)',
        ],
        self::SIZE_BRA_CUPS => [
            'key' => self::SIZE_BRA_CUPS,
            'value' => 'Talla de bra (copas)',
        ],
        self::SIZE_SKIRT => [
            'key' => self::SIZE_SKIRT,
            'value' => 'Talla de falda',
        ],
        self::SIZE_SHOES => [
            'key' => self::SIZE_SHOES,
            'value' => 'Talla de zapatos',
        ],
        self::SIZE_PANTS => [
            'key' => self::SIZE_PANTS,
            'value' => 'Talla de pantalones',
        ],
    ];
}
