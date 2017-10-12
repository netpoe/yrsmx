<?php

namespace App\Model\Quiz\GetAway;

use App\Model\Quiz\QuizGetAwayAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class TripType extends QuizGetAwayAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const FESTIVAL_DE_MUSICA = 1;
    const CRUCERO = 2;
    const DESCANSO = 3;
    const NEGOCIOS = 4;
    const ECOTURSIMO = 5;
    const CULTURAL = 6;
    const FAMILIAR = 7;
    const DE_AMIGAS = 8;
    const BACKPACK  = 9;
    const DESPEDIDA_DE_SOLTERA = 10;
    const HONEYMOON = 11;

    const OPTIONS = [
        [
            'key' => self::FESTIVAL_DE_MUSICA,
            'value' => 'Festival de música',
        ],
        [
            'key' => self::CRUCERO,
            'value' => 'Crucero',
        ],
        [
            'key' => self::DESCANSO,
            'value' => 'Descanso',
        ],
        [
            'key' => self::NEGOCIOS,
            'value' => 'Negocios',
        ],
        [
            'key' => self::ECOTURSIMO,
            'value' => 'Ecotursimo',
        ],
        [
            'key' => self::CULTURAL,
            'value' => 'Cultural',
        ],
        [
            'key' => self::FAMILIAR,
            'value' => 'Familiar',
        ],
        [
            'key' => self::DE_AMIGAS,
            'value' => 'De amigas',
        ],
        [
            'key' => self::BACKPACK,
            'value' =>  'Backpack ',
        ],
        [
            'key' => self::DESPEDIDA_DE_SOLTERA,
            'value' => 'Despedida de soltera',
        ],
        [
            'key' => self::HONEYMOON,
            'value' => 'Honeymoon',
        ],
    ];
}
