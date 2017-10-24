<?php

namespace App\Model\User\Style;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserStyleAdapter,
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class Accessories extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = DictProductCategories::ACCESSORIES;

    const COLUMN = 'accessories';

    const BOLSAS = 1;
    const LENTES_DE_SOL = 2;
    const SOMBREROS = 3;
    const COLLARES = 4;
    const FOULARD = 5;
    const CINTURONES = 6;
    const PULSERAS = 7;
    const ZAPATOS = 8;
    const ANILLOS = 9;
    const ARETES = 10;
    const EARCUFFS = 11;

    const OPTIONS = [
        self::BOLSAS => [
            'key' => self::BOLSAS,
            'value' => 'bolsas',
        ],
        self::LENTES_DE_SOL => [
            'key' => self::LENTES_DE_SOL,
            'value' => 'lentes de sol',
        ],
        self::SOMBREROS => [
            'key' => self::SOMBREROS,
            'value' => 'sombreros',
        ],
        self::COLLARES => [
            'key' => self::COLLARES,
            'value' => 'collares',
        ],
        self::FOULARD => [
            'key' => self::FOULARD,
            'value' => 'foulard',
        ],
        self::CINTURONES => [
            'key' => self::CINTURONES,
            'value' => 'cinturones',
        ],
        self::PULSERAS => [
            'key' => self::PULSERAS,
            'value' => 'pulseras',
        ],
        self::ZAPATOS => [
            'key' => self::ZAPATOS,
            'value' => 'zapatos',
        ],
        self::ANILLOS => [
            'key' => self::ANILLOS,
            'value' => 'anillos',
        ],
        self::ARETES => [
            'key' => self::ARETES,
            'value' => 'aretes',
        ],
        self::EARCUFFS => [
            'key' => self::EARCUFFS,
            'value' => 'earcuffs',
        ],
    ];
}
