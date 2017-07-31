<?php

namespace App\Model\UserSizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserSizesAdapter as UserSizes;

class ShoesSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const SIZE_22 = 22;
    const SIZE_22_5 = 22.5;
    const SIZE_23 = 23;
    const SIZE_23_5 = 23.5;
    const SIZE_24 = 24;
    const SIZE_24_5 = 24.5;
    const SIZE_25 = 25;
    const SIZE_25_5 = 25.5;
    const SIZE_26 = 26;
    const SIZE_26_5 = 26.5;
    const SIZE_27 = 27;

    const OPTIONS = [
        [
            'key' => self::SIZE_22,
            'value' => self::SIZE_22,
        ],
        [
            'key' => self::SIZE_22_5,
            'value' => self::SIZE_22_5,
        ],
        [
            'key' => self::SIZE_23,
            'value' => self::SIZE_23,
        ],
        [
            'key' => self::SIZE_23_5,
            'value' => self::SIZE_23_5,
        ],
        [
            'key' => self::SIZE_24,
            'value' => self::SIZE_24,
        ],
        [
            'key' => self::SIZE_24_5,
            'value' => self::SIZE_24_5,
        ],
        [
            'key' => self::SIZE_25,
            'value' => self::SIZE_25,
        ],
        [
            'key' => self::SIZE_25_5,
            'value' => self::SIZE_25_5,
        ],
        [
            'key' => self::SIZE_26,
            'value' => self::SIZE_26,
        ],
        [
            'key' => self::SIZE_26_5,
            'value' => self::SIZE_26_5,
        ],
        [
            'key' => self::SIZE_27,
            'value' => self::SIZE_27,
        ],
    ];
}
