<?php

namespace App\Model\UserPreferredBodyParts;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserPreferredBodyPartsAdapter as UserPreferredBodyParts;

class BodyType extends UserPreferredBodyParts implements InputOptionsContract
{
    use InputOptionsTrait;

    const TRIANGLE = 1;
    const ELIPTICAL = 2;
    const INVERTED_TRIANGLE = 3;
    const RECTANGLE = 4;
    const SAND_WATCH = 5;

    const OPTIONS = [
        [
            'key' => self::TRIANGLE,
            'value' => 'Triángulo',
        ],
        [
            'key' => self::ELIPTICAL,
            'value' => 'Óvalo',
        ],
        [
            'key' => self::INVERTED_TRIANGLE,
            'value' => 'Triángulo invertido',
        ],
        [
            'key' => self::RECTANGLE,
            'value' => 'Rectángulo',
        ],
        [
            'key' => self::SAND_WATCH,
            'value' => 'Reloj de arena',
        ],
    ];
}
