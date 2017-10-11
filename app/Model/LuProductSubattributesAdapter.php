<?php

namespace App\Model;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes,
    User\Style\Colors,
    User\Style\Prints,
    User\Style\Fabrics,
    User\Style\Words,
    Product\BodyPart,
    User\Style\Jewelry,
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
