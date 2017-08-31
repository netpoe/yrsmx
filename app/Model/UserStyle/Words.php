<?php

namespace App\Model\UserStyle;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserStyleAdapter,
    LuProductAttributesAdapter as LuProductAttributes
};

class Words extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const ATTRIBUTE_ID = LuProductAttributes::WORDS;

    const BOHEMIO = 1;
    const CONSERVADOR = 2;
    const FEMENINO = 3;
    const ROMANTICO = 4;
    const MASCULINO = 5;
    const NATURAL = 6;
    const ATREVIDO = 7;
    const EXCENTRICO = 8;
    const GLAMUROSO = 9;
    const SEXY = 10;
    const TRENDY = 11;
    const DRAMATICO = 12;
    const CASUAL = 13;
    const ARRIESGADO = 14;
    const SENCILLO = 15;
    const DEPORTIVO = 16;
    const HIPSTER = 17;
    const CLASICO = 18;
    const ELEGANTE = 19;
    const PREPPY = 20;
    const FORMAL = 21;
    const VINTAGE = 22;
    const CHIC = 23;
    const HIPPIE = 24;
    const ROCKERO = 25;

    const OPTIONS = [
        self::BOHEMIO => [
            'key' => self::BOHEMIO,
            'value' => 'bohemio',
        ],
        self::CONSERVADOR => [
            'key' => self::CONSERVADOR,
            'value' => 'conservador',
        ],
        self::FEMENINO => [
            'key' => self::FEMENINO,
            'value' => 'femenino',
        ],
        self::ROMANTICO => [
            'key' => self::ROMANTICO,
            'value' => 'romántico',
        ],
        self::MASCULINO => [
            'key' => self::MASCULINO,
            'value' => 'masculino',
        ],
        self::NATURAL => [
            'key' => self::NATURAL,
            'value' => 'natural',
        ],
        self::ATREVIDO => [
            'key' => self::ATREVIDO,
            'value' => 'atrevido',
        ],
        self::EXCENTRICO => [
            'key' => self::EXCENTRICO,
            'value' => 'excéntrico',
        ],
        self::GLAMUROSO => [
            'key' => self::GLAMUROSO,
            'value' => 'glamuroso',
        ],
        self::SEXY => [
            'key' => self::SEXY,
            'value' => 'sexy',
        ],
        self::TRENDY => [
            'key' => self::TRENDY,
            'value' => 'trendy',
        ],
        self::DRAMATICO => [
            'key' => self::DRAMATICO,
            'value' => 'dramático',
        ],
        self::CASUAL => [
            'key' => self::CASUAL,
            'value' => 'casual',
        ],
        self::ARRIESGADO => [
            'key' => self::ARRIESGADO,
            'value' => 'arriesgado',
        ],
        self::SENCILLO => [
            'key' => self::SENCILLO,
            'value' => 'sencillo',
        ],
        self::DEPORTIVO => [
            'key' => self::DEPORTIVO,
            'value' => 'deportivo',
        ],
        self::HIPSTER => [
            'key' => self::HIPSTER,
            'value' => 'hipster',
        ],
        self::CLASICO => [
            'key' => self::CLASICO,
            'value' => 'clásico',
        ],
        self::ELEGANTE => [
            'key' => self::ELEGANTE,
            'value' => 'elegante',
        ],
        self::PREPPY => [
            'key' => self::PREPPY,
            'value' => 'preppy',
        ],
        self::FORMAL => [
            'key' => self::FORMAL,
            'value' => 'formal',
        ],
        self::VINTAGE => [
            'key' => self::VINTAGE,
            'value' => 'vintage',
        ],
        self::CHIC => [
            'key' => self::CHIC,
            'value' => 'chic',
        ],
        self::HIPPIE => [
            'key' => self::HIPPIE,
            'value' => 'hippie',
        ],
        self::ROCKERO => [
            'key' => self::ROCKERO,
            'value' => 'rockero',
        ],
    ];
}
