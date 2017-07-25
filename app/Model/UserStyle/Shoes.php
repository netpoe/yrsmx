<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Shoes extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const TENNIS = 1;
    const FLATS = 2;
    const SANDALIAS = 3;
    const TACONES = 4;
    const PLATAFORMAS = 5;
    const BOTAS = 6;

    const OPTIONS = [
        [
            'key' => self::TENNIS,
            'value' => 'tennis',
        ],
        [
            'key' => self::FLATS,
            'value' => 'flats',
        ],
        [
            'key' => self::SANDALIAS,
            'value' => 'sandalias',
        ],
        [
            'key' => self::TACONES,
            'value' => 'tacones',
        ],
        [
            'key' => self::PLATAFORMAS,
            'value' => 'plataformas',
        ],
        [
            'key' => self::BOTAS,
            'value' => 'botas',
        ],
    ];
}
