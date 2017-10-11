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
    LuProductAttributesAdapter as LuProductAttributes
};

class Prints extends UserStyleAdapter
    implements InputOptionsContract, IsSubattributeContract
{
    use InputOptionsTrait;
    use IsSubattributeTrait;

    const ATTRIBUTE_ID = LuProductAttributes::PRINTS;

    const COLUMN = 'prints';

    const FLORES = 1;
    const GRAFICOS = 2;
    const MILITAR = 3;
    const CUADROS = 4;
    const LINEAS = 5;
    const ESCOCES = 6;
    const TRIBAL = 7;
    const LEOPARDO = 8;
    const ZEBRA = 9;
    const VIBORA = 10;
    const LUNARES = 11;
    const PREPPY = 12;
    const PAISLEY = 13;
    const BORDADOS = 14;
    const NINGUNO = 15;

    const OPTIONS = [
        self::FLORES => [
            'key' => self::FLORES,
            'value' => 'flores',
        ],
        self::GRAFICOS => [
            'key' => self::GRAFICOS,
            'value' => 'gráficos',
        ],
        self::MILITAR => [
            'key' => self::MILITAR,
            'value' => 'militar',
        ],
        self::CUADROS => [
            'key' => self::CUADROS,
            'value' => 'cuadros',
        ],
        self::LINEAS => [
            'key' => self::LINEAS,
            'value' => 'líneas',
        ],
        self::ESCOCES => [
            'key' => self::ESCOCES,
            'value' => 'escocés',
        ],
        self::TRIBAL => [
            'key' => self::TRIBAL,
            'value' => 'tribal',
        ],
        self::LEOPARDO => [
            'key' => self::LEOPARDO,
            'value' => 'leopardo',
        ],
        self::ZEBRA => [
            'key' => self::ZEBRA,
            'value' => 'zebra',
        ],
        self::VIBORA => [
            'key' => self::VIBORA,
            'value' => 'víbora',
        ],
        self::LUNARES => [
            'key' => self::LUNARES,
            'value' => 'lunares',
        ],
        self::PREPPY => [
            'key' => self::PREPPY,
            'value' => 'preppy',
        ],
        self::PAISLEY => [
            'key' => self::PAISLEY,
            'value' => 'paisley',
        ],
        self::BORDADOS => [
            'key' => self::BORDADOS,
            'value' => 'bordados',
        ],
        self::NINGUNO => [
            'key' => self::NINGUNO,
            'value' => 'ninguno',
        ],
    ];
}
