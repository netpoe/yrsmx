<?php

namespace App\Model\User\Sizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserSizesAdapter as UserSizes,
    LuProductCategoriesAdapter as LuProductCategories
};

class BlouseSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::SIZE_BLOUSE;

    const COLUMN = 'blouse';

    const ECH = 'ECH';
    const CH = 'CH';
    const M = 'M';
    const G = 'G';
    const EG = 'EG';
    const EEG = 'EEG';

    const OPTIONS = [
        self::ECH => [
            'key' => self::ECH,
            'value' => self::ECH,
        ],
        self::CH => [
            'key' => self::CH,
            'value' => self::CH,
        ],
        self::M => [
            'key' => self::M,
            'value' => self::M,
        ],
        self::G => [
            'key' => self::G,
            'value' => self::G,
        ],
        self::EG => [
            'key' => self::EG,
            'value' => self::EG,
        ],
        self::EEG => [
            'key' => self::EEG,
            'value' => self::EEG,
        ],
    ];
}
