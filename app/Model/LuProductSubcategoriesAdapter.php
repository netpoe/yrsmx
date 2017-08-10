<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories,
    UserPreferredBodyParts\BodyType,
    UserFit\LowerPartFit,
    UserFit\UpperPartFit,
    UserFit\PantsFitShape,
    UserFit\PantsFitHips,
    UserStyle\Clothes,
    Product\ProductType
};

class LuProductSubcategoriesAdapter extends LuProductSubcategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        // CATEGORY::TYPE
        [
            'key' => Clothes::VESTIDOS,
            'value' => Clothes::OPTIONS[Clothes::VESTIDOS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::CHAMARRAS,
            'value' => Clothes::OPTIONS[Clothes::CHAMARRAS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::SHORTS,
            'value' => Clothes::OPTIONS[Clothes::SHORTS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::CAMISAS_DE_VESTIR,
            'value' => Clothes::OPTIONS[Clothes::CAMISAS_DE_VESTIR]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::BLUSAS,
            'value' => Clothes::OPTIONS[Clothes::BLUSAS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::PLAYERAS,
            'value' => Clothes::OPTIONS[Clothes::PLAYERAS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::GABARDINAS,
            'value' => Clothes::OPTIONS[Clothes::GABARDINAS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::SACOS,
            'value' => Clothes::OPTIONS[Clothes::SACOS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::FALDAS,
            'value' => Clothes::OPTIONS[Clothes::FALDAS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::PANTALONES_CASUALES,
            'value' => Clothes::OPTIONS[Clothes::PANTALONES_CASUALES]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::TRAJE_SASTRE,
            'value' => Clothes::OPTIONS[Clothes::TRAJE_SASTRE]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::ABRIGOS,
            'value' => Clothes::OPTIONS[Clothes::ABRIGOS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::JUMPSUITS,
            'value' => Clothes::OPTIONS[Clothes::JUMPSUITS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::CROP_TOPS,
            'value' => Clothes::OPTIONS[Clothes::CROP_TOPS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::LEGGINGS,
            'value' => Clothes::OPTIONS[Clothes::LEGGINGS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::PANTALONES_DE_VESTIR,
            'value' => Clothes::OPTIONS[Clothes::PANTALONES_DE_VESTIR]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::SUETERES,
            'value' => Clothes::OPTIONS[Clothes::SUETERES]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::JEANS,
            'value' => Clothes::OPTIONS[Clothes::JEANS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::TRAJES_DE_BANO,
            'value' => Clothes::OPTIONS[Clothes::TRAJES_DE_BANO]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::BODIES,
            'value' => Clothes::OPTIONS[Clothes::BODIES]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::BRALETTES,
            'value' => Clothes::OPTIONS[Clothes::BRALETTES]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::ZAPATOS,
            'value' => Clothes::OPTIONS[Clothes::ZAPATOS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => Clothes::ACCESORIOS,
            'value' => Clothes::OPTIONS[Clothes::ACCESORIOS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],

        // CATEGORY::BODY_TYPE
        [
            'key' => BodyType::TRIANGLE,
            'value' => BodyType::OPTIONS[BodyType::TRIANGLE]['value'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => BodyType::ELIPTICAL,
            'value' => BodyType::OPTIONS[BodyType::ELIPTICAL]['value'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => BodyType::INVERTED_TRIANGLE,
            'value' => BodyType::OPTIONS[BodyType::INVERTED_TRIANGLE]['value'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => BodyType::RECTANGLE,
            'value' => BodyType::OPTIONS[BodyType::RECTANGLE]['value'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => BodyType::SAND_WATCH,
            'value' => BodyType::OPTIONS[BodyType::SAND_WATCH]['value'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],

        // CATEGORY::LOWER_PART_FIT
        [
            'key' => LowerPartFit::FIT,
            'value' => LowerPartFit::OPTIONS[LowerPartFit::FIT]['value'],
            'category_id' => LuProductCategories::LOWER_PART_FIT,
        ],
        [
            'key' => LowerPartFit::MID,
            'value' => LowerPartFit::OPTIONS[LowerPartFit::MID]['value'],
            'category_id' => LuProductCategories::LOWER_PART_FIT,
        ],
        [
            'key' => LowerPartFit::LOOSE,
            'value' => LowerPartFit::OPTIONS[LowerPartFit::LOOSE]['value'],
            'category_id' => LuProductCategories::LOWER_PART_FIT,
        ],
        [
            'key' => LowerPartFit::OVERSIZE,
            'value' => LowerPartFit::OPTIONS[LowerPartFit::OVERSIZE]['value'],
            'category_id' => LuProductCategories::LOWER_PART_FIT,
        ],

        // CATEGORY::UPPER_PART_FIT
        [
            'key' => UpperPartFit::FIT,
            'value' => UpperPartFit::OPTIONS[UpperPartFit::FIT]['value'],
            'category_id' => LuProductCategories::UPPER_PART_FIT,
        ],
        [
            'key' => UpperPartFit::MID,
            'value' => UpperPartFit::OPTIONS[UpperPartFit::MID]['value'],
            'category_id' => LuProductCategories::UPPER_PART_FIT,
        ],
        [
            'key' => UpperPartFit::LOOSE,
            'value' => UpperPartFit::OPTIONS[UpperPartFit::LOOSE]['value'],
            'category_id' => LuProductCategories::UPPER_PART_FIT,
        ],
        [
            'key' => UpperPartFit::OVERSIZE,
            'value' => UpperPartFit::OPTIONS[UpperPartFit::OVERSIZE]['value'],
            'category_id' => LuProductCategories::UPPER_PART_FIT,
        ],

        // CATEGORY::PANTS_FIT_SHAPE
        [
            'key' => PantsFitShape::SKINNY,
            'value' => PantsFitShape::OPTIONS[PantsFitShape::SKINNY]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_SHAPE,
        ],
        [
            'key' => PantsFitShape::WIDE,
            'value' => PantsFitShape::OPTIONS[PantsFitShape::WIDE]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_SHAPE,
        ],
        [
            'key' => PantsFitShape::STRAIGHT,
            'value' => PantsFitShape::OPTIONS[PantsFitShape::STRAIGHT]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_SHAPE,
        ],
        [
            'key' => PantsFitShape::BELL,
            'value' => PantsFitShape::OPTIONS[PantsFitShape::BELL]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_SHAPE,
        ],
        [
            'key' => PantsFitShape::LEGGINGS,
            'value' => PantsFitShape::OPTIONS[PantsFitShape::LEGGINGS]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_SHAPE,
        ],

        // CATEGORY::PANTS_FIT_HIPS
        [
            'key' => PantsFitHips::HIP,
            'value' => PantsFitHips::OPTIONS[PantsFitHips::HIP]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_HIPS,
        ],
        [
            'key' => PantsFitHips::MID,
            'value' => PantsFitHips::OPTIONS[PantsFitHips::MID]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_HIPS,
        ],
        [
            'key' => PantsFitHips::WAIST,
            'value' => PantsFitHips::OPTIONS[PantsFitHips::WAIST]['value'],
            'category_id' => LuProductCategories::PANTS_FIT_HIPS,
        ],
    ];
}
