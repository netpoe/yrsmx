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
    Product\ProductType,
    Product\BodyPart
};

class LuProductSubcategoriesAdapter extends LuProductSubcategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        // CATEGORY::TYPE
        [
            'key' => ProductType::BRA,
            'value' => ProductType::OPTIONS[ProductType::BRA]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::DRESS,
            'value' => ProductType::OPTIONS[ProductType::DRESS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::SKIRT,
            'value' => ProductType::OPTIONS[ProductType::SKIRT]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::SHOES,
            'value' => ProductType::OPTIONS[ProductType::SHOES]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::PANTS,
            'value' => ProductType::OPTIONS[ProductType::PANTS]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::ACCESSORY,
            'value' => ProductType::OPTIONS[ProductType::ACCESSORY]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => ProductType::JEWEL,
            'value' => ProductType::OPTIONS[ProductType::JEWEL]['value'],
            'category_id' => LuProductCategories::TYPE,
        ],

        // CATEGORY::BODY_PART
        [
            'key' => BodyPart::THIGHS,
            'value' => BodyPart::OPTIONS[BodyPart::THIGHS]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::CALVES,
            'value' => BodyPart::OPTIONS[BodyPart::CALVES]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::BUTT,
            'value' => BodyPart::OPTIONS[BodyPart::BUTT]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::ABDOMEN,
            'value' => BodyPart::OPTIONS[BodyPart::ABDOMEN]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::HIPS,
            'value' => BodyPart::OPTIONS[BodyPart::HIPS]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::BREAST,
            'value' => BodyPart::OPTIONS[BodyPart::BREAST]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::SHOULDERS,
            'value' => BodyPart::OPTIONS[BodyPart::SHOULDERS]['value'],
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => BodyPart::ARMS,
            'value' => BodyPart::OPTIONS[BodyPart::ARMS]['value'],
            'category_id' => LuProductCategories::BODY_PART,
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
