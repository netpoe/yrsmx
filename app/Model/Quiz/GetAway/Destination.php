<?php

namespace App\Model\Quiz\GetAway;

use App\Model\Quiz\QuizGetAwayAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Destination extends QuizGetAwayAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const BEACH = 1;
    const SNOW = 2;
    const CITY = 3;
    const FOREST = 4;
    const TOWN = 5;

    const OPTIONS = [
        [
            'key' => self::BEACH,
            'value' => 'Playa',
        ],
        [
            'key' => self::SNOW,
            'value' => 'Nieve',
        ],
        [
            'key' => self::CITY,
            'value' => 'Ciudad',
        ],
        [
            'key' => self::FOREST,
            'value' => 'Montaña / Bosque',
        ],
        [
            'key' => self::TOWN,
            'value' => 'Pueblo',
        ],
    ];
}
