<?php

namespace App\Model\UserStyle;

use App\Model\UserStyleAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\LuProductCategoriesAdapter as LuProductCategories;

class Clothes extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::TYPE;

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
                LuProductCategories::UPPER_PART_FIT,
                LuProductCategories::SIZE_DRESS,
            ],
        ],
        self::CHAMARRAS => [
            'key' => self::CHAMARRAS,
            'value' => 'chamarras',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
                LuProductCategories::SIZE_DRESS,
            ],
        ],
        self::SHORTS => [
            'key' => self::SHORTS,
            'value' => 'shorts',
            'dependencies' => [
                LuProductCategories::LOWER_PART_FIT,
            ]
        ],
        self::CAMISAS_DE_VESTIR => [
            'key' => self::CAMISAS_DE_VESTIR,
            'value' => 'camisas de vestir',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
                LuProductCategories::SIZE_DRESS,
            ],
        ],
        self::BLUSAS => [
            'key' => self::BLUSAS,
            'value' => 'blusas',
            'dependencies' => [
                LuProductCategories::SIZE_BLOUSE,
                LuProductCategories::UPPER_PART_FIT,
            ],
        ],
        self::PLAYERAS => [
            'key' => self::PLAYERAS,
            'value' => 'playeras',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
                LuProductCategories::SIZE_BLOUSE,
            ],
        ],
        self::GABARDINAS => [
            'key' => self::GABARDINAS,
            'value' => 'gabardinas',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
            ],
        ],
        self::SACOS => [
            'key' => self::SACOS,
            'value' => 'sacos',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
            ],
        ],
        self::FALDAS => [
            'key' => self::FALDAS,
            'value' => 'faldas',
            'dependencies' => [
                LuProductCategories::LOWER_PART_FIT,
                LuProductCategories::SIZE_SKIRT,
            ],
        ],
        self::PANTALONES_CASUALES => [
            'key' => self::PANTALONES_CASUALES,
            'value' => 'pantalones casuales',
            'dependencies' => [
                LuProductCategories::PANTS_FIT_SHAPE,
                LuProductCategories::PANTS_FIT_HIPS,
                LuProductCategories::SIZE_PANTS,
            ],
        ],
        self::TRAJE_SASTRE => [
            'key' => self::TRAJE_SASTRE,
            'value' => 'traje sastre',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
            ],
        ],
        self::ABRIGOS => [
            'key' => self::ABRIGOS,
            'value' => 'abrigos',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
            ],
        ],
        self::JUMPSUITS => [
            'key' => self::JUMPSUITS,
            'value' => 'jumpsuits',
            'dependencies' => [
                LuProductCategories::SIZE_DRESS,
            ],
        ],
        self::CROP_TOPS => [
            'key' => self::CROP_TOPS,
            'value' => 'crop tops',
            'dependencies' => [
                LuProductCategories::SIZE_BLOUSE,
            ],
        ],
        self::LEGGINGS => [
            'key' => self::LEGGINGS,
            'value' => 'leggings',
            'dependencies' => [
                LuProductCategories::SIZE_SKIRT,
            ],
        ],
        self::PANTALONES_DE_VESTIR => [
            'key' => self::PANTALONES_DE_VESTIR,
            'value' => 'pantalones de vestir',
            'dependencies' => [
                LuProductCategories::PANTS_FIT_SHAPE,
                LuProductCategories::PANTS_FIT_HIPS,
                LuProductCategories::SIZE_PANTS,
            ],
        ],
        self::SUETERES => [
            'key' => self::SUETERES,
            'value' => 'suéteres',
            'dependencies' => [
                LuProductCategories::UPPER_PART_FIT,
                LuProductCategories::SIZE_DRESS,
            ],
        ],
        self::JEANS => [
            'key' => self::JEANS,
            'value' => 'jeans',
            'dependencies' => [
                LuProductCategories::PANTS_FIT_SHAPE,
                LuProductCategories::PANTS_FIT_HIPS,
                LuProductCategories::SIZE_PANTS,
            ],
        ],
        self::TRAJES_DE_BANO => [
            'key' => self::TRAJES_DE_BANO,
            'value' => 'trajes de baño',
            'dependencies' => [
                LuProductCategories::SIZE_SKIRT,
            ],
        ],
        self::BODIES => [
            'key' => self::BODIES,
            'value' => 'bodies',
            'dependencies' => [
                LuProductCategories::SIZE_SKIRT,
            ],
        ],
        self::BRALETTES => [
            'key' => self::BRALETTES,
            'value' => 'bralettes',
            'dependencies' => [
                LuProductCategories::SIZE_BLOUSE,
            ],
        ],
        self::ZAPATOS => [
            'key' => self::ZAPATOS,
            'value' => 'zapatos',
            'dependencies' => [
                LuProductCategories::SIZE_BLOUSE,
                LuProductCategories::SIZE_SHOES,
                LuProductCategories::SHOES,
            ],
        ],
        self::ACCESORIOS => [
            'key' => self::ACCESORIOS,
            'value' => 'accesorios',
            'dependencies' => [
                LuProductCategories::ACCESSORIES,
            ],
        ],
    ];
}
