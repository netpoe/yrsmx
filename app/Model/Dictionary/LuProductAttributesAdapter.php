<?php

namespace App\Model\Dictionary;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    User\Style\Colors,
    User\Style\Prints,
    User\Style\Fabrics,
    User\Style\Words,
    User\Style\Jewelry,
    Outfit\OutfitTypeAdapter as OutfitType,
    User\PreferredBodyParts\BodyPart
};

class LuProductAttributesAdapter extends LuProductAttributes implements InputOptionsContract
{
    use InputOptionsTrait;

    const COLORS = 1;
    const PRINTS = 2;
    const FABRICS = 3;
    const WORDS = 4;
    const JEWELRY = 5;
    const BODY_PART = 6;
    const OUTFIT_TYPE = 7;

    const OPTIONS = [
        self::COLORS => [
            'key' => self::COLORS,
            'value' => 'Colores',
            'subattribute' => Colors::class,
        ],
        self::PRINTS => [
            'key' => self::PRINTS,
            'value' => 'Estampados',
            'subattribute' => Prints::class,
        ],
        self::FABRICS => [
            'key' => self::FABRICS,
            'value' => 'Telas',
            'subattribute' => Fabrics::class,
        ],
        self::WORDS => [
            'key' => self::WORDS,
            'value' => 'Palabras',
            'subattribute' => Words::class,
        ],
        self::JEWELRY => [
            'key' => self::JEWELRY,
            'value' => 'Joyería',
            'subattribute' => Jewelry::class,
        ],
        self::BODY_PART => [
            'key' => self::BODY_PART,
            'value' => 'Parte del cuerpo',
            'subattribute' => BodyPart::class,
        ],
        self::OUTFIT_TYPE => [
            'key' => self::OUTFIT_TYPE,
            'value' => 'Outfit',
            'subattribute' => OutfitType::class,
        ],
    ];
}













