<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Accessories extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const BOLSAS = 1;
    const LENTES_DE_SOL = 2;
    const SOMBREROS = 3;
    const COLLARES = 4;
    const FOULARD = 5;
    const CINTURONES = 6;
    const PULSERAS = 7;
    const ZAPATOS = 8;
    const ANILLOS = 9;
    const ARETES = 10;
    const EARCUFFS = 11;

    const OPTIONS = [
        [
            'key' => self::BOLSAS,
            'value' => 'bolsas',
        ],
        [
            'key' => self::LENTES_DE_SOL,
            'value' => 'lentes de sol',
        ],
        [
            'key' => self::SOMBREROS,
            'value' => 'sombreros',
        ],
        [
            'key' => self::COLLARES,
            'value' => 'collares',
        ],
        [
            'key' => self::FOULARD,
            'value' => 'foulard',
        ],
        [
            'key' => self::CINTURONES,
            'value' => 'cinturones',
        ],
        [
            'key' => self::PULSERAS,
            'value' => 'pulseras',
        ],
        [
            'key' => self::ZAPATOS,
            'value' => 'zapatos',
        ],
        [
            'key' => self::ANILLOS,
            'value' => 'anillos',
        ],
        [
            'key' => self::ARETES,
            'value' => 'aretes',
        ],
        [
            'key' => self::EARCUFFS,
            'value' => 'earcuffs',
        ],
    ];
}
