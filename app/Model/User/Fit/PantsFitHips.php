<?php

namespace App\Model\User\Fit;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserFitAdapter as UserFit,
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class PantsFitHips extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::PANTS_FIT_HIPS;

    const COLUMN = 'pants_fit_hips';

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
