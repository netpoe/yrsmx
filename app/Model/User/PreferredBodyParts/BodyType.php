<?php

namespace App\Model\User\PreferredBodyParts;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserPreferredBodyPartsAdapter as UserPreferredBodyParts,
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class BodyType extends UserPreferredBodyParts implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = DictProductCategories::BODY_TYPE;

    const COLUMN = 'body_type';

    const TRIANGLE = 1;
    const ELIPTICAL = 2;
    const INVERTED_TRIANGLE = 3;
    const RECTANGLE = 4;
    const SAND_WATCH = 5;

    const OPTIONS = [
        self::TRIANGLE => [
            'key' => self::TRIANGLE,
            'value' => 'Triángulo',
        ],
        self::ELIPTICAL => [
            'key' => self::ELIPTICAL,
            'value' => 'Óvalo',
        ],
        self::INVERTED_TRIANGLE => [
            'key' => self::INVERTED_TRIANGLE,
            'value' => 'Triángulo invertido',
        ],
        self::RECTANGLE => [
            'key' => self::RECTANGLE,
            'value' => 'Rectángulo',
        ],
        self::SAND_WATCH => [
            'key' => self::SAND_WATCH,
            'value' => 'Reloj de arena',
        ],
    ];
}
