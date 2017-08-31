<?php

namespace App\Model;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes,
    UserStyle\Colors,
    UserStyle\Prints,
    UserStyle\Fabrics,
    UserStyle\Words,
    Product\BodyPart,
    UserStyle\Jewelry,
    OutfitType
};

class LuProductSubattributesAdapter extends LuProductSubattributes
{
    const SUBATTRIBUTES = [
        Colors::class, // ATTR::COLORS
        Prints::class, // ATTR::PRINTS
        Fabrics::class, // ATTR::FABRICS
        Words::class, // ATTR::WORDS
        BodyPart::class, // ATTR::BODY_PART
        Jewelry::class, // ATTR::JEWELRY
        OutfitType::class, // ATTR::OUTFIT_TYPE
    ];
}
