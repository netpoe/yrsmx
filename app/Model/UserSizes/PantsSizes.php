<?php

namespace App\Model\UserSizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserSizesAdapter as UserSizes;

class PantsSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const SIZE_1 = 1;
    const SIZE_3 = 3;
    const SIZE_5 = 5;
    const SIZE_7 = 7;
    const SIZE_9 = 9;
    const SIZE_11 = 11;
    const SIZE_13 = 13;
    const SIZE_15 = 15;

    const OPTIONS = [
        self::SIZE_1 => [
            'key' => self::SIZE_1,
            'value' => self::SIZE_1,
        ],
        self::SIZE_3 => [
            'key' => self::SIZE_3,
            'value' => self::SIZE_3,
        ],
        self::SIZE_5 => [
            'key' => self::SIZE_5,
            'value' => self::SIZE_5,
        ],
        self::SIZE_7 => [
            'key' => self::SIZE_7,
            'value' => self::SIZE_7,
        ],
        self::SIZE_9 => [
            'key' => self::SIZE_9,
            'value' => self::SIZE_9,
        ],
        self::SIZE_11 => [
            'key' => self::SIZE_11,
            'value' => self::SIZE_11,
        ],
        self::SIZE_13 => [
            'key' => self::SIZE_13,
            'value' => self::SIZE_13,
        ],
        self::SIZE_15 => [
            'key' => self::SIZE_15,
            'value' => self::SIZE_15,
        ],
    ];
}
