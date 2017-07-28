<?php

namespace App\Model\QuizGetAway;

use App\Model\QuizGetAwayAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Weather extends QuizGetAwayAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const SOLEADO = 1;
    const LLUVIOSO = 2;
    const TEMPLADO = 3;
    const FRÍO = 4;

    const OPTIONS = [
        [
            'key' => self::SOLEADO,
            'value' => 'Soleado',
        ],
        [
            'key' => self::LLUVIOSO,
            'value' => 'Lluvioso',
        ],
        [
            'key' => self::TEMPLADO,
            'value' => 'Templado',
        ],
        [
            'key' => self::FRÍO,
            'value' => 'Frío',
        ],
    ];
}
