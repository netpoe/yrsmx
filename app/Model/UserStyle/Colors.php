<?php

namespace App\Model\UserStyle;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserStyleAdapter,
    LuProductAttributesAdapter as LuProductAttributes
};

class Colors extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const ATTRIBUTE_ID = LuProductAttributes::COLORS;

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
        self::BLANCO => [
            'key' => self::BLANCO,
            'value' => 'blanco',
        ],
        self::CREMA => [
            'key' => self::CREMA,
            'value' => 'crema',
        ],
        self::NUDE => [
            'key' => self::NUDE,
            'value' => 'nude',
        ],
        self::BEIGE => [
            'key' => self::BEIGE,
            'value' => 'beige',
        ],
        self::CAFE => [
            'key' => self::CAFE,
            'value' => 'cafe',
        ],
        self::GRIS => [
            'key' => self::GRIS,
            'value' => 'gris',
        ],
        self::NEGRO => [
            'key' => self::NEGRO,
            'value' => 'negro',
        ],
        self::AZUL_CELESTE => [
            'key' => self::AZUL_CELESTE,
            'value' => 'azul celeste',
        ],
        self::AZUL_REY => [
            'key' => self::AZUL_REY,
            'value' => 'azul rey',
        ],
        self::AZUL_MARINO => [
            'key' => self::AZUL_MARINO,
            'value' => 'azul marino',
        ],
        self::LILA => [
            'key' => self::LILA,
            'value' => 'lila',
        ],
        self::MORADO => [
            'key' => self::MORADO,
            'value' => 'morado',
        ],
        self::ROSA_PASTEL => [
            'key' => self::ROSA_PASTEL,
            'value' => 'rosa pastel',
        ],
        self::FUCSIA => [
            'key' => self::FUCSIA,
            'value' => 'fucsia',
        ],
        self::AQUA => [
            'key' => self::AQUA,
            'value' => 'aqua',
        ],
        self::VERDE => [
            'key' => self::VERDE,
            'value' => 'verde',
        ],
        self::AMARILLO => [
            'key' => self::AMARILLO,
            'value' => 'amarillo',
        ],
        self::NARANJA => [
            'key' => self::NARANJA,
            'value' => 'naranja',
        ],
        self::ROJO => [
            'key' => self::ROJO,
            'value' => 'rojo',
        ],
        self::VINO => [
            'key' => self::VINO,
            'value' => 'vino',
        ],
        self::MULTICOLOR => [
            'key' => self::MULTICOLOR,
            'value' => 'multicolor',
        ],
        self::DORADO => [
            'key' => self::DORADO,
            'value' => 'dorado',
        ],
        self::PLATEADO => [
            'key' => self::PLATEADO,
            'value' => 'plateado',
        ],
    ];
}
