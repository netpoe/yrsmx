<?php

namespace App\Model\UserFit;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserFitAdapter as UserFit,
    LuProductCategoriesAdapter as LuProductCategories
};

class UpperPartFit extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::UPPER_PART_FIT;

    const FIT = 1;
    const MID = 2;
    const LOOSE = 3;
    const OVERSIZE = 4;

    const OPTIONS = [
        self::FIT => [
            'key' => self::FIT,
            'value' => 'Ajustadas',
        ],
        self::MID => [
            'key' => self::MID,
            'value' => 'Punto medio',
        ],
        self::LOOSE => [
            'key' => self::LOOSE,
            'value' => 'Holgadas',
        ],
        self::OVERSIZE => [
            'key' => self::OVERSIZE,
            'value' => 'Grandes',
        ],
    ];
}
