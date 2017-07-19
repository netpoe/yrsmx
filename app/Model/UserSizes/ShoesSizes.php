<?php

namespace App\Model\UserSizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserSizesAdapter as UserSizes;

class ShoesSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const size_22 = 22;
    const size_22_5 = 22.5;
    const size_23 = 23;
    const size_23_5 = 23.5;
    const size_24 = 24;
    const size_24_5 = 24.5;
    const size_25 = 25;
    const size_25_5 = 25.5;
    const size_26 = 26;
    const size_26_5 = 26.5;
    const size_27 = 27;

    const OPTIONS = [
        [
            'key' => self::size_22,
            'value' => self::size_22,
        ],
        [
            'key' => self::size_22_5,
            'value' => self::size_22_5,
        ],
        [
            'key' => self::size_23,
            'value' => self::size_23,
        ],
        [
            'key' => self::size_23_5,
            'value' => self::size_23_5,
        ],
        [
            'key' => self::size_24,
            'value' => self::size_24,
        ],
        [
            'key' => self::size_24_5,
            'value' => self::size_24_5,
        ],
        [
            'key' => self::size_25,
            'value' => self::size_25,
        ],
        [
            'key' => self::size_25_5,
            'value' => self::size_25_5,
        ],
        [
            'key' => self::size_26,
            'value' => self::size_26,
        ],
        [
            'key' => self::size_26_5,
            'value' => self::size_26_5,
        ],
        [
            'key' => self::size_27,
            'value' => self::size_27,
        ],
    ];
}
