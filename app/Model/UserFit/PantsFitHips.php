<?php

namespace App\Model\UserFit;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserFitAdapter as UserFit,
    LuProductCategoriesAdapter as LuProductCategories
};

class PantsFitHips extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::PANTS_FIT_HIPS;

    const HIP = 1;
    const MID = 2;
    const WAIST = 3;

    const OPTIONS = [
        self::HIP => [
            'key' => self::HIP,
            'value' => 'A la cadera',
        ],
        self::MID => [
            'key' => self::MID,
            'value' => 'Medio',
        ],
        self::WAIST => [
            'key' => self::WAIST,
            'value' => 'A la cintura',
        ],
    ];
}
