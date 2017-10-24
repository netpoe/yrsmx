<?php

namespace App\Model\User\Style;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Entities\{
    Contracts\IsSubattributeContract,
    Traits\IsSubattributeTrait
};

use App\Model\{
    User\UserStyleAdapter,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

class Fabrics extends UserStyleAdapter
    implements InputOptionsContract, IsSubattributeContract
{
    use InputOptionsTrait;
    use IsSubattributeTrait;

    const ATTRIBUTE_ID = DictProductAttributes::FABRICS;

    const COLUMN = 'fabrics';

    const ALGODON = 1;
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
        self::ALGODON => [
            'key' => self::ALGODON,
            'value' => 'algodón',
        ],
        self::LYCRA => [
            'key' => self::LYCRA,
            'value' => 'lycra',
        ],
        self::LANA => [
            'key' => self::LANA,
            'value' => 'lana',
        ],
        self::PANA => [
            'key' => self::PANA,
            'value' => 'pana',
        ],
        self::NEOPRENO => [
            'key' => self::NEOPRENO,
            'value' => 'neopreno',
        ],
        self::ENCAJE => [
            'key' => self::ENCAJE,
            'value' => 'encaje',
        ],
        self::CACHEMIR => [
            'key' => self::CACHEMIR,
            'value' => 'cachemir',
        ],
        self::GABARDINA => [
            'key' => self::GABARDINA,
            'value' => 'gabardina',
        ],
        self::TERCIOPELO => [
            'key' => self::TERCIOPELO,
            'value' => 'terciopelo',
        ],
        self::NYLON => [
            'key' => self::NYLON,
            'value' => 'nylon',
        ],
        self::GASA => [
            'key' => self::GASA,
            'value' => 'gasa',
        ],
        self::MEZCLILLA => [
            'key' => self::MEZCLILLA,
            'value' => 'mezclilla',
        ],
        self::TUL => [
            'key' => self::TUL,
            'value' => 'tul',
        ],
        self::SEDA => [
            'key' => self::SEDA,
            'value' => 'seda',
        ],
        self::TACTO_PIEL => [
            'key' => self::TACTO_PIEL,
            'value' => 'tacto piel',
        ],
        self::POLIESTER => [
            'key' => self::POLIESTER,
            'value' => 'poliéster',
        ],
    ];
}
