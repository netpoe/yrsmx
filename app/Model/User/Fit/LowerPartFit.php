<?php

namespace App\Model\User\Fit;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserFitAdapter as UserFit,
    LuProductCategoriesAdapter as LuProductCategories
};

class LowerPartFit extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::LOWER_PART_FIT;

    const COLUMN = 'lower_part_fit';

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
