<?php

namespace App\Model\UserSizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserSizesAdapter as UserSizes,
    LuProductCategoriesAdapter as LuProductCategories
};

class BraBandSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::SIZE_BRA_BAND;

    const SIZE_30 = 30;
    const SIZE_32 = 32;
    const SIZE_34 = 34;
    const SIZE_36 = 36;
    const SIZE_38 = 38;
    const SIZE_40 = 40;
    const SIZE_42 = 42;

    const OPTIONS = [
        self::SIZE_30 => [
            'key' => self::SIZE_30,
            'value' => self::SIZE_30,
        ],
        self::SIZE_32 => [
            'key' => self::SIZE_32,
            'value' => self::SIZE_32,
        ],
        self::SIZE_34 => [
            'key' => self::SIZE_34,
            'value' => self::SIZE_34,
        ],
        self::SIZE_36 => [
            'key' => self::SIZE_36,
            'value' => self::SIZE_36,
        ],
        self::SIZE_38 => [
            'key' => self::SIZE_38,
            'value' => self::SIZE_38,
        ],
        self::SIZE_40 => [
            'key' => self::SIZE_40,
            'value' => self::SIZE_40,
        ],
        self::SIZE_42 => [
            'key' => self::SIZE_42,
            'value' => self::SIZE_42,
        ],
    ];
}
