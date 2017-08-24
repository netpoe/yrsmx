<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

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
        ],
        self::PRINTS => [
            'key' => self::PRINTS,
            'value' => 'Estampados',
        ],
        self::FABRICS => [
            'key' => self::FABRICS,
            'value' => 'Telas',
        ],
        self::WORDS => [
            'key' => self::WORDS,
            'value' => 'Palabras',
        ],
        self::JEWELRY => [
            'key' => self::JEWELRY,
            'value' => 'Joyería',
        ],
        self::BODY_PART => [
            'key' => self::BODY_PART,
            'value' => 'Parte del cuerpo',
        ],
        self::OUTFIT_TYPE => [
            'key' => self::OUTFIT_TYPE,
            'value' => 'Outfit',
        ],
    ];

}













