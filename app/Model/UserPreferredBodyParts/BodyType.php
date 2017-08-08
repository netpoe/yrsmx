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
        self::TRIANGLE => [
            'key' => self::TRIANGLE,
            'value' => 'Triángulo',
            'alias' => 'triangulo'
        ],
        self::ELIPTICAL => [
            'key' => self::ELIPTICAL,
            'value' => 'Óvalo',
            'alias' => 'ovalo'
        ],
        self::INVERTED_TRIANGLE => [
            'key' => self::INVERTED_TRIANGLE,
            'value' => 'Triángulo invertido',
            'alias' => 'triangulo_invertido'
        ],
        self::RECTANGLE => [
            'key' => self::RECTANGLE,
            'value' => 'Rectángulo',
            'alias' => 'rectangulo'
        ],
        self::SAND_WATCH => [
            'key' => self::SAND_WATCH,
            'value' => 'Reloj de arena',
            'alias' => 'reloj_de_arena'
        ],
    ];
}
