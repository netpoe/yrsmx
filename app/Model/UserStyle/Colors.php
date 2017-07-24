<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Colors extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const BLANCO = 1;
    const CREMA = 2;
    const NUDE = 3;
    const BEIGE = 4;
    const CAFE = 5;
    const GRIS = 6;
    const NEGRO = 7;
    const AZUL_CELESTE = 8;
    const AZUL_REY = 9;
    const AZUL_MARINO = 10;
    const LILA = 11;
    const MORADO = 12;
    const ROSA_PASTEL = 13;
    const FUCSIA = 14;
    const AQUA = 15;
    const VERDE = 16;
    const AMARILLO = 17;
    const NARANJA = 18;
    const ROJO = 19;
    const VINO = 20;
    const MULTICOLOR = 21;
    const DORADO = 22;
    const PLATEADO = 23;

    const OPTIONS = [
        [
            'key' => self::BLANCO,
            'value' => 'blanco',
        ],
        [
            'key' => self::CREMA,
            'value' => 'crema',
        ],
        [
            'key' => self::NUDE,
            'value' => 'nude',
        ],
        [
            'key' => self::BEIGE,
            'value' => 'beige',
        ],
        [
            'key' => self::CAFE,
            'value' => 'cafe',
        ],
        [
            'key' => self::GRIS,
            'value' => 'gris',
        ],
        [
            'key' => self::NEGRO,
            'value' => 'negro',
        ],
        [
            'key' => self::AZUL_CELESTE,
            'value' => 'azul celeste',
        ],
        [
            'key' => self::AZUL_REY,
            'value' => 'azul rey',
        ],
        [
            'key' => self::AZUL_MARINO,
            'value' => 'azul marino',
        ],
        [
            'key' => self::LILA,
            'value' => 'lila',
        ],
        [
            'key' => self::MORADO,
            'value' => 'morado',
        ],
        [
            'key' => self::ROSA_PASTEL,
            'value' => 'rosa pastel',
        ],
        [
            'key' => self::FUCSIA,
            'value' => 'fucsia',
        ],
        [
            'key' => self::AQUA,
            'value' => 'aqua',
        ],
        [
            'key' => self::VERDE,
            'value' => 'verde',
        ],
        [
            'key' => self::AMARILLO,
            'value' => 'amarillo',
        ],
        [
            'key' => self::NARANJA,
            'value' => 'naranja',
        ],
        [
            'key' => self::ROJO,
            'value' => 'rojo',
        ],
        [
            'key' => self::VINO,
            'value' => 'vino',
        ],
        [
            'key' => self::MULTICOLOR,
            'value' => 'multicolor',
        ],
        [
            'key' => self::DORADO,
            'value' => 'dorado',
        ],
        [
            'key' => self::PLATEADO,
            'value' => 'plateado',
        ],
    ];
}
