<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class LuProductCategoriesAdapter extends LuProductCategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const TYPE = 1;
    const BODY_PART = 2;
    const LOWER_PART_FIT = 3;
    const UPPER_PART_FIT = 4;
    const BODY_TYPE = 5;
    const PANTS_FIT_SHAPE = 6;
    const PANTS_FIT_HIPS = 7;

    const OPTIONS = [
        [
            'key' => self::TYPE,
            'value' => 'Tipo de producto',
        ],
        [
            'key' => self::BODY_PART,
            'value' => 'Partes del cuerpo',
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
