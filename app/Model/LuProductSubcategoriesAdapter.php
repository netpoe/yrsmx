<?php

namespace App\Model;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories,
    UserPreferredBodyParts\BodyType,
    UserFit\LowerPartFit,
    UserFit\UpperPartFit,
    UserFit\PantsFitShape,
    UserFit\PantsFitHips,
    UserStyle\Clothes,
    Product\ProductType,
    UserStyle\Accessories,
    UserStyle\Risk,
    UserStyle\Shoes,
    UserSizes\BlouseSizes,
    UserSizes\BraBandSizes,
    UserSizes\BraCupsSizes,
    UserSizes\DressSizes,
    UserSizes\PantsSizes,
    UserSizes\ShoesSizes,
    UserSizes\SkirtSizes
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

        // CATEGORY::RISK
        [
            'key' => Risk::FIRST,
            'value' => Risk::OPTIONS[Risk::FIRST]['value'],
            'category_id' => LuProductCategories::RISK,
        ],
        [
            'key' => Risk::TRENDY,
            'value' => Risk::OPTIONS[Risk::TRENDY]['value'],
            'category_id' => LuProductCategories::RISK,
        ],
        [
            'key' => Risk::ORIGINAL,
            'value' => Risk::OPTIONS[Risk::ORIGINAL]['value'],
            'category_id' => LuProductCategories::RISK,
        ],
        [
            'key' => Risk::CLASSIC,
            'value' => Risk::OPTIONS[Risk::CLASSIC]['value'],
            'category_id' => LuProductCategories::RISK,
        ],

        // CATEGORY::SHOES
        [
            'key' => Shoes::TENNIS,
            'value' => Shoes::OPTIONS[Shoes::TENNIS]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],
        [
            'key' => Shoes::FLATS,
            'value' => Shoes::OPTIONS[Shoes::FLATS]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],
        [
            'key' => Shoes::SANDALIAS,
            'value' => Shoes::OPTIONS[Shoes::SANDALIAS]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],
        [
            'key' => Shoes::TACONES,
            'value' => Shoes::OPTIONS[Shoes::TACONES]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],
        [
            'key' => Shoes::PLATAFORMAS,
            'value' => Shoes::OPTIONS[Shoes::PLATAFORMAS]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],
        [
            'key' => Shoes::BOTAS,
            'value' => Shoes::OPTIONS[Shoes::BOTAS]['value'],
            'category_id' => LuProductCategories::SHOES,
        ],

        // CATEGORY::ACCESSORIES
        [
            'key' => Accessories::BOLSAS,
            'value' => Accessories::OPTIONS[Accessories::BOLSAS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::LENTES_DE_SOL,
            'value' => Accessories::OPTIONS[Accessories::LENTES_DE_SOL]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::SOMBREROS,
            'value' => Accessories::OPTIONS[Accessories::SOMBREROS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::COLLARES,
            'value' => Accessories::OPTIONS[Accessories::COLLARES]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::FOULARD,
            'value' => Accessories::OPTIONS[Accessories::FOULARD]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::CINTURONES,
            'value' => Accessories::OPTIONS[Accessories::CINTURONES]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::PULSERAS,
            'value' => Accessories::OPTIONS[Accessories::PULSERAS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::ZAPATOS,
            'value' => Accessories::OPTIONS[Accessories::ZAPATOS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::ANILLOS,
            'value' => Accessories::OPTIONS[Accessories::ANILLOS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::ARETES,
            'value' => Accessories::OPTIONS[Accessories::ARETES]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],
        [
            'key' => Accessories::EARCUFFS,
            'value' => Accessories::OPTIONS[Accessories::EARCUFFS]['value'],
            'category_id' => LuProductCategories::ACCESSORIES,
        ],

        // CATEGORY::SIZE_DRESS
        [
            'key' => DressSizes::ECH,
            'value' => DressSizes::ECH,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::CH,
            'value' => DressSizes::CH,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::M,
            'value' => DressSizes::M,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::G,
            'value' => DressSizes::G,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::EG,
            'value' => DressSizes::EG,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::EEG,
            'value' => DressSizes::EEG,
            'category_id' => LuProductCategories::SIZE_DRESS,
        ],

        // CATEGORY::SIZE_BLOUSE
        [
            'key' => BlouseSizes::ECH,
            'value' => BlouseSizes::ECH,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::CH,
            'value' => BlouseSizes::CH,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::M,
            'value' => BlouseSizes::M,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::G,
            'value' => BlouseSizes::G,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::EG,
            'value' => BlouseSizes::EG,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::EEG,
            'value' => BlouseSizes::EEG,
            'category_id' => LuProductCategories::SIZE_BLOUSE,
        ],

        // CATEGORY::SIZE_BRA_BAND
        [
            'key' => BraBandSizes::SIZE_30,
            'value' => BraBandSizes::SIZE_30,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_32,
            'value' => BraBandSizes::SIZE_32,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_34,
            'value' => BraBandSizes::SIZE_34,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_36,
            'value' => BraBandSizes::SIZE_36,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_38,
            'value' => BraBandSizes::SIZE_38,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_40,
            'value' => BraBandSizes::SIZE_40,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_42,
            'value' => BraBandSizes::SIZE_42,
            'category_id' => LuProductCategories::SIZE_BRA_BAND,
        ],

        // CATEGORY::SIZE_BRA_CUPS
        [
            'key' => BraCupsSizes::SIZE_A,
            'value' => BraCupsSizes::SIZE_A,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_C,
            'value' => BraCupsSizes::SIZE_C,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_D,
            'value' => BraCupsSizes::SIZE_D,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_E,
            'value' => BraCupsSizes::SIZE_E,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_F,
            'value' => BraCupsSizes::SIZE_F,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_G,
            'value' => BraCupsSizes::SIZE_G,
            'category_id' => LuProductCategories::SIZE_BRA_CUPS,
        ],

        // CATEGORY::SIZE_SKIRT
        [
            'key' => SkirtSizes::ECH,
            'value' => SkirtSizes::ECH,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::CH,
            'value' => SkirtSizes::CH,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::M,
            'value' => SkirtSizes::M,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::G,
            'value' => SkirtSizes::G,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::EG,
            'value' => SkirtSizes::EG,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::EEG,
            'value' => SkirtSizes::EEG,
            'category_id' => LuProductCategories::SIZE_SKIRT,
        ],

        // CATEGORY::SIZE_SHOES
        [
            'key' => ShoesSizes::SIZE_22,
            'value' => ShoesSizes::SIZE_22,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_22_5,
            'value' => ShoesSizes::SIZE_22_5,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_23,
            'value' => ShoesSizes::SIZE_23,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_23_5,
            'value' => ShoesSizes::SIZE_23_5,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_24,
            'value' => ShoesSizes::SIZE_24,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_24_5,
            'value' => ShoesSizes::SIZE_24_5,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_25,
            'value' => ShoesSizes::SIZE_25,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_25_5,
            'value' => ShoesSizes::SIZE_25_5,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_26,
            'value' => ShoesSizes::SIZE_26,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_26_5,
            'value' => ShoesSizes::SIZE_26_5,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_27,
            'value' => ShoesSizes::SIZE_27,
            'category_id' => LuProductCategories::SIZE_SHOES,
        ],

        // CATEGORY::SIZE_PANTS
        [
            'key' => PantsSizes::SIZE_1,
            'value' => PantsSizes::SIZE_1,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_3,
            'value' => PantsSizes::SIZE_3,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_5,
            'value' => PantsSizes::SIZE_5,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_7,
            'value' => PantsSizes::SIZE_7,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_9,
            'value' => PantsSizes::SIZE_9,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_11,
            'value' => PantsSizes::SIZE_11,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_13,
            'value' => PantsSizes::SIZE_13,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_15,
            'value' => PantsSizes::SIZE_15,
            'category_id' => LuProductCategories::SIZE_PANTS,
        ],
    ];

    public static function getSubcategoryId(Int $categoryId, $subcategory, $key)
    {
        $value = $subcategory::getOptionsValue($key);

        $luProductSubcategory = LuProductSubcategories::where('category_id', $categoryId)
                                                        ->where('value', $value)
                                                        ->first();

        return $luProductSubcategory ? $luProductSubcategory->id : null;
    }
}







