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
        self::VESTIDOS => [
            'key' => self::VESTIDOS,
            'value' => 'vestidos',
        ],
        self::CHAMARRAS => [
            'key' => self::CHAMARRAS,
            'value' => 'chamarras',
        ],
        self::SHORTS => [
            'key' => self::SHORTS,
            'value' => 'shorts',
        ],
        self::CAMISAS_DE_VESTIR => [
            'key' => self::CAMISAS_DE_VESTIR,
            'value' => 'camisas de vestir',
        ],
        self::BLUSAS => [
            'key' => self::BLUSAS,
            'value' => 'blusas',
        ],
        self::PLAYERAS => [
            'key' => self::PLAYERAS,
            'value' => 'playeras',
        ],
        self::GABARDINAS => [
            'key' => self::GABARDINAS,
            'value' => 'gabardinas',
        ],
        self::SACOS => [
            'key' => self::SACOS,
            'value' => 'sacos',
        ],
        self::FALDAS => [
            'key' => self::FALDAS,
            'value' => 'faldas',
        ],
        self::PANTALONES_CASUALES => [
            'key' => self::PANTALONES_CASUALES,
            'value' => 'pantalones casuales',
        ],
        self::TRAJE_SASTRE => [
            'key' => self::TRAJE_SASTRE,
            'value' => 'traje sastre',
        ],
        self::ABRIGOS => [
            'key' => self::ABRIGOS,
            'value' => 'abrigos',
        ],
        self::JUMPSUITS => [
            'key' => self::JUMPSUITS,
            'value' => 'jumpsuits',
        ],
        self::CROP_TOPS => [
            'key' => self::CROP_TOPS,
            'value' => 'crop tops',
        ],
        self::LEGGINGS => [
            'key' => self::LEGGINGS,
            'value' => 'leggings',
        ],
        self::PANTALONES_DE_VESTIR => [
            'key' => self::PANTALONES_DE_VESTIR,
            'value' => 'pantalones de vestir',
        ],
        self::SUETERES => [
            'key' => self::SUETERES,
            'value' => 'suéteres',
        ],
        self::JEANS => [
            'key' => self::JEANS,
            'value' => 'jeans',
        ],
        self::TRAJES_DE_BANO => [
            'key' => self::TRAJES_DE_BANO,
            'value' => 'trajes de baño',
        ],
        self::BODIES => [
            'key' => self::BODIES,
            'value' => 'bodies',
        ],
        self::BRALETTES => [
            'key' => self::BRALETTES,
            'value' => 'bralettes',
        ],
    ];
}
