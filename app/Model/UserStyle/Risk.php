<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Risk extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const FIRST = 1;
    const TRENDY = 2;
    const ORIGINAL = 3;
    const CLASSIC = 4;

    const OPTIONS = [
        [
            'key' => self::FIRST,
            'value' => 'Generalmente soy la primera de mis amigas en probar nuevos estilos y tendencias.',
        ],
        [
            'key' => self::TRENDY,
            'value' => 'A veces me gusta probar nuevas tendencias.',
        ],
        [
            'key' => self::ORIGINAL,
            'value' => 'La mayor parte de mi ropa son básicos pero tengo algunas piezas originales que resaltan.',
        ],
        [
            'key' => self::CLASSIC,
            'value' => 'Soy muy clásica, prefiero apegarme a lo básico.',
        ],
    ];
}