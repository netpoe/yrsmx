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
    const OUTFIT_TYPE = 7;

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
        self::OUTFIT_TYPE => [
            'key' => self::OUTFIT_TYPE,
            'value' => 'Outfit',
        ],
    ];
}
