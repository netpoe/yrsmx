<?php

namespace App\Model\Dictionary;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories,
    User\PreferredBodyParts\BodyType,
    User\Fit\LowerPartFit,
    User\Fit\UpperPartFit,
    User\Fit\PantsFitShape,
    User\Fit\PantsFitHips,
    User\Style\Clothes,
    User\Style\Accessories,
    User\Style\Risk,
    User\Style\Shoes,
    User\Sizes\BlouseSizes,
    User\Sizes\BraBandSizes,
    User\Sizes\BraCupsSizes,
    User\Sizes\DressSizes,
    User\Sizes\PantsSizes,
    User\Sizes\ShoesSizes,
    User\Sizes\SkirtSizes
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







