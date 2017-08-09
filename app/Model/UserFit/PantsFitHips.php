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
        self::HIP => [
            'key' => self::HIP,
            'value' => 'A la cadera',
        ],
        self::MID => [
            'key' => self::MID,
            'value' => 'Medio',
        ],
        self::WAIST => [
            'key' => self::WAIST,
            'value' => 'A la cintura',
        ],
    ];
}
