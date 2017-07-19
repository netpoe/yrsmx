<?php

namespace App\Model\UserSizes;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserSizesAdapter as UserSizes;

class BraCupsSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const SIZE_A = 'A';
    const SIZE_C = 'C';
    const SIZE_D = 'D';
    const SIZE_E = 'E';
    const SIZE_F = 'F';
    const SIZE_G = 'G';

    const OPTIONS = [
        [
            'key' => self::SIZE_A,
            'value' => self::SIZE_A,
        ],
        [
            'key' => self::SIZE_C,
            'value' => self::SIZE_C,
        ],
        [
            'key' => self::SIZE_D,
            'value' => self::SIZE_D,
        ],
        [
            'key' => self::SIZE_E,
            'value' => self::SIZE_E,
        ],
        [
            'key' => self::SIZE_F,
            'value' => self::SIZE_F,
        ],
        [
            'key' => self::SIZE_G,
            'value' => self::SIZE_G,
        ],
    ];
}
