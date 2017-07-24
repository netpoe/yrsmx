<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Prints extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const FLORES = 1;
    const GRÁFICOS = 2;
    const MILITAR = 3;
    const CUADROS = 4;
    const LINEAS = 5;
    const ESCOCES = 6;
    const TRIBAL = 7;
    const LEOPARDO = 8;
    const ZEBRA = 9;
    const VIBORA = 10;
    const LUNARES = 11;
    const PREPPY = 12;
    const PAISLEY = 13;
    const BORDADOS = 14;
    const NINGUNO = 15;

    const OPTIONS = [
        [
            'key' => self::FLORES,
            'value' => 'flores',
        ],
        [
            'key' => self::GRÁFICOS,
            'value' => 'gráficos',
        ],
        [
            'key' => self::MILITAR,
            'value' => 'militar',
        ],
        [
            'key' => self::CUADROS,
            'value' => 'cuadros',
        ],
        [
            'key' => self::LINEAS,
            'value' => 'líneas',
        ],
        [
            'key' => self::ESCOCES,
            'value' => 'escocés',
        ],
        [
            'key' => self::TRIBAL,
            'value' => 'tribal',
        ],
        [
            'key' => self::LEOPARDO,
            'value' => 'leopardo',
        ],
        [
            'key' => self::ZEBRA,
            'value' => 'zebra',
        ],
        [
            'key' => self::VIBORA,
            'value' => 'víbora',
        ],
        [
            'key' => self::LUNARES,
            'value' => 'lunares',
        ],
        [
            'key' => self::PREPPY,
            'value' => 'preppy',
        ],
        [
            'key' => self::PAISLEY,
            'value' => 'paisley',
        ],
        [
            'key' => self::BORDADOS,
            'value' => 'bordados',
        ],
        [
            'key' => self::NINGUNO,
            'value' => 'ninguno',
        ],
    ];
}
