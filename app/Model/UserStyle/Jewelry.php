<?php

namespace App\Model\UserStyle;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Entities\{
    Contracts\IsSubattributeContract,
    Traits\IsSubattributeTrait
};

use App\Model\{
    UserStyleAdapter,
    LuProductAttributesAdapter as LuProductAttributes
};

class Jewelry extends UserStyleAdapter
    implements InputOptionsContract, IsSubattributeContract
{
    use InputOptionsTrait;
    use IsSubattributeTrait;

    const ATTRIBUTE_ID = LuProductAttributes::JEWELRY;

    const COLUMN = 'jewelry';

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
        self::ORO => [
            'key' => self::ORO,
            'value' => 'oro',
        ],
        self::PLATA => [
            'key' => self::PLATA,
            'value' => 'plata',
        ],
        self::FANTASIA => [
            'key' => self::FANTASIA,
            'value' => 'fantasía',
        ],
        self::OVERSIZE => [
            'key' => self::OVERSIZE,
            'value' => 'oversize',
        ],
        self::DISCRETA => [
            'key' => self::DISCRETA,
            'value' => 'discreta',
        ],
        self::MODERNA => [
            'key' => self::MODERNA,
            'value' => 'moderna',
        ],
        self::CLASICA => [
            'key' => self::CLASICA,
            'value' => 'clásica',
        ],
        self::MINIMAL => [
            'key' => self::MINIMAL,
            'value' => 'minimal',
        ],
        self::BOHO => [
            'key' => self::BOHO,
            'value' => 'boho',
        ],
    ];
}
