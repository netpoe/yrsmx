<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class Clothes extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const VESTIDOS = 1;
    const CHAMARRAS = 2;
    const SHORTS = 3;
    const CAMISAS_DE_VESTIR = 4;
    const BLUSAS = 5;
    const PLAYERAS = 6;
    const GABARDINAS = 7;
    const SACOS = 8;
    const FALDAS = 9;
    const PANTALONES_CASUALES = 10;
    const TRAJE_SASTRE = 11;
    const ABRIGOS = 12;
    const JUMPSUITS = 13;
    const CROP_TOPS = 14;
    const LEGGINGS = 15;
    const PANTALONES_DE_VESTIR = 16;
    const SUETERES = 17;
    const JEANS = 18;
    const TRAJES_DE_BANO = 19;
    const BODIES = 20;
    const BRALETTES = 21;

    const OPTIONS = [
        [
            'key' => self::VESTIDOS,
            'value' => 'vestidos',
        ],
        [
            'key' => self::CHAMARRAS,
            'value' => 'chamarras',
        ],
        [
            'key' => self::SHORTS,
            'value' => 'shorts',
        ],
        [
            'key' => self::CAMISAS_DE_VESTIR,
            'value' => 'camisas de vestir',
        ],
        [
            'key' => self::BLUSAS,
            'value' => 'blusas',
        ],
        [
            'key' => self::PLAYERAS,
            'value' => 'playeras',
        ],
        [
            'key' => self::GABARDINAS,
            'value' => 'gabardinas',
        ],
        [
            'key' => self::SACOS,
            'value' => 'sacos',
        ],
        [
            'key' => self::FALDAS,
            'value' => 'faldas',
        ],
        [
            'key' => self::PANTALONES_CASUALES,
            'value' => 'pantalones casuales',
        ],
        [
            'key' => self::TRAJE_SASTRE,
            'value' => 'traje sastre',
        ],
        [
            'key' => self::ABRIGOS,
            'value' => 'abrigos',
        ],
        [
            'key' => self::JUMPSUITS,
            'value' => 'jumpsuits',
        ],
        [
            'key' => self::CROP_TOPS,
            'value' => 'crop tops',
        ],
        [
            'key' => self::LEGGINGS,
            'value' => 'leggings',
        ],
        [
            'key' => self::PANTALONES_DE_VESTIR,
            'value' => 'pantalones de vestir',
        ],
        [
            'key' => self::SUETERES,
            'value' => 'suéteres',
        ],
        [
            'key' => self::JEANS,
            'value' => 'jeans',
        ],
        [
            'key' => self::TRAJES_DE_BANO,
            'value' => 'trajes de baño',
        ],
        [
            'key' => self::BODIES,
            'value' => 'bodies',
        ],
        [
            'key' => self::BRALETTES,
            'value' => 'bralettes',
        ],
    ];
}
