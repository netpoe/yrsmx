<?php

namespace App\Model\User\Style;

use App\Model\User\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\Dictionary\DictProductCategoriesAdapter as DictProductCategories;

class Clothes extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = DictProductCategories::TYPE;

    const COLUMN = 'clothes';

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
    const ZAPATOS = 22;
    const ACCESORIOS = 23;

    const OPTIONS = [
        self::VESTIDOS => [
            'key' => self::VESTIDOS,
            'value' => 'vestidos',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
                DictProductCategories::SIZE_DRESS,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 0,
        ],
        self::CHAMARRAS => [
            'key' => self::CHAMARRAS,
            'value' => 'chamarras',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
                DictProductCategories::SIZE_DRESS,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::SHORTS => [
            'key' => self::SHORTS,
            'value' => 'shorts',
            'dependencies' => [
                DictProductCategories::LOWER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::CAMISAS_DE_VESTIR => [
            'key' => self::CAMISAS_DE_VESTIR,
            'value' => 'camisas de vestir',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
                DictProductCategories::SIZE_DRESS,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::BLUSAS => [
            'key' => self::BLUSAS,
            'value' => 'blusas',
            'dependencies' => [
                DictProductCategories::SIZE_BLOUSE,
                DictProductCategories::UPPER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 0,
        ],
        self::PLAYERAS => [
            'key' => self::PLAYERAS,
            'value' => 'playeras',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
                DictProductCategories::SIZE_BLOUSE,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 0,
        ],
        self::GABARDINAS => [
            'key' => self::GABARDINAS,
            'value' => 'gabardinas',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::SACOS => [
            'key' => self::SACOS,
            'value' => 'sacos',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::FALDAS => [
            'key' => self::FALDAS,
            'value' => 'faldas',
            'dependencies' => [
                DictProductCategories::LOWER_PART_FIT,
                DictProductCategories::SIZE_SKIRT,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::PANTALONES_CASUALES => [
            'key' => self::PANTALONES_CASUALES,
            'value' => 'pantalones casuales',
            'dependencies' => [
                DictProductCategories::PANTS_FIT_SHAPE,
                DictProductCategories::PANTS_FIT_HIPS,
                DictProductCategories::SIZE_PANTS,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::TRAJE_SASTRE => [
            'key' => self::TRAJE_SASTRE,
            'value' => 'traje sastre',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::ABRIGOS => [
            'key' => self::ABRIGOS,
            'value' => 'abrigos',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::JUMPSUITS => [
            'key' => self::JUMPSUITS,
            'value' => 'jumpsuits',
            'dependencies' => [
                DictProductCategories::SIZE_DRESS,
            ],
            'zIndex' => 20,
            'positionTop' => 30,
            'positionLeft' => 50,
        ],
        self::CROP_TOPS => [
            'key' => self::CROP_TOPS,
            'value' => 'crop tops',
            'dependencies' => [
                DictProductCategories::SIZE_BLOUSE,
            ],
            'zIndex' => 15,
            'positionTop' => 0,
            'positionLeft' => 0,
        ],
        self::LEGGINGS => [
            'key' => self::LEGGINGS,
            'value' => 'leggings',
            'dependencies' => [
                DictProductCategories::SIZE_SKIRT,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 50,
        ],
        self::PANTALONES_DE_VESTIR => [
            'key' => self::PANTALONES_DE_VESTIR,
            'value' => 'pantalones de vestir',
            'dependencies' => [
                DictProductCategories::PANTS_FIT_SHAPE,
                DictProductCategories::PANTS_FIT_HIPS,
                DictProductCategories::SIZE_PANTS,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::SUETERES => [
            'key' => self::SUETERES,
            'value' => 'suéteres',
            'dependencies' => [
                DictProductCategories::UPPER_PART_FIT,
                DictProductCategories::SIZE_DRESS,
            ],
            'zIndex' => 20,
            'positionTop' => 0,
            'positionLeft' => 50,
        ],
        self::JEANS => [
            'key' => self::JEANS,
            'value' => 'jeans',
            'dependencies' => [
                DictProductCategories::PANTS_FIT_SHAPE,
                DictProductCategories::PANTS_FIT_HIPS,
                DictProductCategories::SIZE_PANTS,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::TRAJES_DE_BANO => [
            'key' => self::TRAJES_DE_BANO,
            'value' => 'trajes de baño',
            'dependencies' => [
                DictProductCategories::SIZE_SKIRT,
            ],
            'zIndex' => 20,
            'positionTop' => 50,
            'positionLeft' => 0,
        ],
        self::BODIES => [
            'key' => self::BODIES,
            'value' => 'bodies',
            'dependencies' => [
                DictProductCategories::SIZE_SKIRT,
            ],
            'zIndex' => 20,
            'positionTop' => 30,
            'positionLeft' => 50,
        ],
        self::BRALETTES => [
            'key' => self::BRALETTES,
            'value' => 'bralettes',
            'dependencies' => [
                DictProductCategories::SIZE_BLOUSE,
            ],
            'zIndex' => 20,
            'positionTop' => 20,
            'positionLeft' => 50,
        ],
        self::ZAPATOS => [
            'key' => self::ZAPATOS,
            'value' => 'zapatos',
            'dependencies' => [
                DictProductCategories::SIZE_SHOES,
                DictProductCategories::SHOES,
            ],
            'zIndex' => 20,
            'positionTop' => 100,
            'positionLeft' => 50,
        ],
        self::ACCESORIOS => [
            'key' => self::ACCESORIOS,
            'value' => 'accesorios',
            'dependencies' => [
                DictProductCategories::ACCESSORIES,
            ],
            'zIndex' => 20,
            'positionTop' => 40,
            'positionLeft' => 100,
        ],
    ];
}
