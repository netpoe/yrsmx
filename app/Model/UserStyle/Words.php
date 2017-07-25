<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Words extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

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
        [
            'key' => self::BOHEMIO,
            'value' => 'bohemio',
        ],
        [
            'key' => self::CONSERVADOR,
            'value' => 'conservador',
        ],
        [
            'key' => self::FEMENINO,
            'value' => 'femenino',
        ],
        [
            'key' => self::ROMANTICO,
            'value' => 'romántico',
        ],
        [
            'key' => self::MASCULINO,
            'value' => 'masculino',
        ],
        [
            'key' => self::NATURAL,
            'value' => 'natural',
        ],
        [
            'key' => self::ATREVIDO,
            'value' => 'atrevido',
        ],
        [
            'key' => self::EXCENTRICO,
            'value' => 'excéntrico',
        ],
        [
            'key' => self::GLAMUROSO,
            'value' => 'glamuroso',
        ],
        [
            'key' => self::SEXY,
            'value' => 'sexy',
        ],
        [
            'key' => self::TRENDY,
            'value' => 'trendy',
        ],
        [
            'key' => self::DRAMATICO,
            'value' => 'dramático',
        ],
        [
            'key' => self::CASUAL,
            'value' => 'casual',
        ],
        [
            'key' => self::ARRIESGADO,
            'value' => 'arriesgado',
        ],
        [
            'key' => self::SENCILLO,
            'value' => 'sencillo',
        ],
        [
            'key' => self::DEPORTIVO,
            'value' => 'deportivo',
        ],
        [
            'key' => self::HIPSTER,
            'value' => 'hipster',
        ],
        [
            'key' => self::CLASICO,
            'value' => 'clásico',
        ],
        [
            'key' => self::ELEGANTE,
            'value' => 'elegante',
        ],
        [
            'key' => self::PREPPY,
            'value' => 'preppy',
        ],
        [
            'key' => self::FORMAL,
            'value' => 'formal',
        ],
        [
            'key' => self::VINTAGE,
            'value' => 'vintage',
        ],
        [
            'key' => self::CHIC,
            'value' => 'chic',
        ],
        [
            'key' => self::HIPPIE,
            'value' => 'hippie',
        ],
        [
            'key' => self::ROCKERO,
            'value' => 'rockero',
        ],
    ];
}
