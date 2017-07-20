<?php

namespace App\Model\UserFit;

use App\Model\UserFitAdapter as UserFit;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class PantsFitHips extends UserFit implements InputOptionsContract
{
    use InputOptionsTrait;

    const HIP = 1;
    const MID = 2;
    const WAIST = 3;

    const OPTIONS = [
        [
            'key' => self::HIP,
            'value' => 'A la cadera',
        ],
        [
            'key' => self::MID,
            'value' => 'Medio',
        ],
        [
            'key' => self::WAIST,
            'value' => 'A la cintura',
        ],
    ];
}
