<?php

namespace App\Model\UserFit;

use App\Model\UserFitAdapter as UserFit;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class PantsFitShape extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const SKINNY = 1;
    const WIDE = 2;
    const STRAIGHT = 3;
    const BELL = 4;
    const LEGGINGS = 5;

    const OPTIONS = [
        [
            'key' => self::SKINNY,
            'value' => 'Skinny',
        ],
        [
            'key' => self::WIDE,
            'value' => 'Anchos',
        ],
        [
            'key' => self::STRAIGHT,
            'value' => 'Rectos',
        ],
        [
            'key' => self::BELL,
            'value' => 'Acampanados',
        ],
        [
            'key' => self::LEGGINGS,
            'value' => 'Leggings',
        ],
    ];
}
