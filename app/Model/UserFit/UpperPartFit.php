<?php

namespace App\Model\UserFit;

use App\Model\UserFitAdapter as UserFit;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class UpperPartFit extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const FIT = 1;
    const MID = 2;
    const LOOSE = 3;
    const OVERSIZE = 4;

    const OPTIONS = [
        [
            'key' => self::FIT,
            'value' => 'Ajustadas',
        ],
        [
            'key' => self::MID,
            'value' => 'Punto medio',
        ],
        [
            'key' => self::LOOSE,
            'value' => 'Holgadas',
        ],
        [
            'key' => self::OVERSIZE,
            'value' => 'Grandes',
        ],
    ];
}
