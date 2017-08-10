<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class LuProductCategoriesAdapter extends LuProductCategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const TYPE = 1;
    const LOWER_PART_FIT = 2;
    const UPPER_PART_FIT = 3;
    const BODY_TYPE = 4;
    const PANTS_FIT_SHAPE = 5;
    const PANTS_FIT_HIPS = 6;

    const OPTIONS = [
        [
            'key' => self::TYPE,
            'value' => 'Tipo de producto',
        ],
        [
            'key' => self::LOWER_PART_FIT,
            'value' => 'Fit parte inferior',
        ],
        [
            'key' => self::UPPER_PART_FIT,
            'value' => 'Fit parte superior',
        ],
        [
            'key' => self::BODY_TYPE,
            'value' => 'Tipo de cuerpo',
        ],
        [
            'key' => self::PANTS_FIT_SHAPE,
            'value' => 'Forma del pantalón',
        ],
        [
            'key' => self::PANTS_FIT_HIPS,
            'value' => 'Forma del pantalón (caderas)',
        ],
    ];
}
