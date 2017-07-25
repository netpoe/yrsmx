<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Jewelry extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const ORO = 1;
    const PLATA = 2;
    const FANTASIA = 3;
    const OVERSIZE = 4;
    const DISCRETA = 5;
    const MODERNA = 6;
    const CLASICA = 7;
    const MINIMAL = 8;
    const BOHO = 9;

    const OPTIONS = [
        [
            'key' => self::ORO,
            'value' => 'oro',
        ],
        [
            'key' => self::PLATA,
            'value' => 'plata',
        ],
        [
            'key' => self::FANTASIA,
            'value' => 'fantasía',
        ],
        [
            'key' => self::OVERSIZE,
            'value' => 'oversize',
        ],
        [
            'key' => self::DISCRETA,
            'value' => 'discreta',
        ],
        [
            'key' => self::MODERNA,
            'value' => 'moderna',
        ],
        [
            'key' => self::CLASICA,
            'value' => 'clásica',
        ],
        [
            'key' => self::MINIMAL,
            'value' => 'minimal',
        ],
        [
            'key' => self::BOHO,
            'value' => 'boho',
        ],
    ];
}
