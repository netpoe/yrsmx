<?php

namespace App\Model\User\Sizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserSizesAdapter as UserSizes,
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class BraCupsSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::SIZE_BRA_CUPS;

    const COLUMN = 'bra_cups';

    const SIZE_A = 'A';
    const SIZE_C = 'C';
    const SIZE_D = 'D';
    const SIZE_E = 'E';
    const SIZE_F = 'F';
    const SIZE_G = 'G';

    const OPTIONS = [
        self::SIZE_A => [
            'key' => self::SIZE_A,
            'value' => self::SIZE_A,
        ],
        self::SIZE_C => [
            'key' => self::SIZE_C,
            'value' => self::SIZE_C,
        ],
        self::SIZE_D => [
            'key' => self::SIZE_D,
            'value' => self::SIZE_D,
        ],
        self::SIZE_E => [
            'key' => self::SIZE_E,
            'value' => self::SIZE_E,
        ],
        self::SIZE_F => [
            'key' => self::SIZE_F,
            'value' => self::SIZE_F,
        ],
        self::SIZE_G => [
            'key' => self::SIZE_G,
            'value' => self::SIZE_G,
        ],
    ];
}
