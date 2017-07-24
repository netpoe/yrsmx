<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Fabrics extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const ALGODO = 1;
    const LYCRA = 2;
    const LANA = 3;
    const PANA = 4;
    const NEOPRENO = 5;
    const ENCAJE = 6;
    const CACHEMIR = 7;
    const GABARDINA = 8;
    const TERCIOPELO = 9;
    const NYLON = 10;
    const GASA = 11;
    const MEZCLILLA = 12;
    const TUL = 13;
    const SEDA = 14;
    const TACTO_PIEL = 15;
    const POLIESTER = 16;

    const OPTIONS = [
        [
            'key' => self::ALGODO,
            'value' => 'algodón',
        ],
        [
            'key' => self::LYCRA,
            'value' => 'lycra',
        ],
        [
            'key' => self::LANA,
            'value' => 'lana',
        ],
        [
            'key' => self::PANA,
            'value' => 'pana',
        ],
        [
            'key' => self::NEOPRENO,
            'value' => 'neopreno',
        ],
        [
            'key' => self::ENCAJE,
            'value' => 'encaje',
        ],
        [
            'key' => self::CACHEMIR,
            'value' => 'cachemir',
        ],
        [
            'key' => self::GABARDINA,
            'value' => 'gabardina',
        ],
        [
            'key' => self::TERCIOPELO,
            'value' => 'terciopelo',
        ],
        [
            'key' => self::NYLON,
            'value' => 'nylon',
        ],
        [
            'key' => self::GASA,
            'value' => 'gasa',
        ],
        [
            'key' => self::MEZCLILLA,
            'value' => 'mezclilla',
        ],
        [
            'key' => self::TUL,
            'value' => 'tul',
        ],
        [
            'key' => self::SEDA,
            'value' => 'seda',
        ],
        [
            'key' => self::TACTO_PIEL,
            'value' => 'tacto piel',
        ],
        [
            'key' => self::POLIESTER,
            'value' => 'poliéster',
        ],
    ];
}
