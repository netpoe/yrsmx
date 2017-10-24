<?php

namespace App\Model\User\Style;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\UserStyleAdapter,
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class Shoes extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = DictProductCategories::SHOES;

    const COLUMN = 'shoes';

    const TENNIS = 1;
    const FLATS = 2;
    const SANDALIAS = 3;
    const TACONES = 4;
    const PLATAFORMAS = 5;
    const BOTAS = 6;

    const OPTIONS = [
        self::TENNIS => [
            'key' => self::TENNIS,
            'value' => 'tennis',
        ],
        self::FLATS => [
            'key' => self::FLATS,
            'value' => 'flats',
        ],
        self::SANDALIAS => [
            'key' => self::SANDALIAS,
            'value' => 'sandalias',
        ],
        self::TACONES => [
            'key' => self::TACONES,
            'value' => 'tacones',
        ],
        self::PLATAFORMAS => [
            'key' => self::PLATAFORMAS,
            'value' => 'plataformas',
        ],
        self::BOTAS => [
            'key' => self::BOTAS,
            'value' => 'botas',
        ],
    ];
}
