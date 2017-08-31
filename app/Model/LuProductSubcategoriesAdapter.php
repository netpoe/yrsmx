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

class LuProductSubcategoriesAdapter extends LuProductSubcategories
{
    const SUBCATEGORIES = [
        Clothes::class, // CATEGORY::TYPE
        BodyType::class, // CATEGORY::BODY_TYPE
        UpperPartFit::class, // CATEGORY::UPPER_PART_FIT
        LowerPartFit::class, // CATEGORY::LOWER_PART_FIT
        PantsFitShape::class, // CATEGORY::PANTS_FIT_SHAPE
        PantsFitHips::class, // CATEGORY::PANTS_FIT_HIPS
        Risk::class, // CATEGORY::RISK
        Shoes::class, // CATEGORY::SHOES
        Accessories::class, // CATEGORY::ACCESSORIES
        DressSizes::class, // CATEGORY::SIZE_DRESS
        BlouseSizes::class, // CATEGORY::SIZE_BLOUSE
        BraBandSizes::class, // CATEGORY::SIZE_BRA_BAND
        BraCupsSizes::class, // CATEGORY::SIZE_BRA_CUPS
        SkirtSizes::class, // CATEGORY::SIZE_SKIRT
        ShoesSizes::class, // CATEGORY::SIZE_SHOES
        PantsSizes::class, // CATEGORY::SIZE_PANTS
    ];
}







