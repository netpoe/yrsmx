<?php

namespace App\Model\Dictionary;

use App\Model\{
    Dictionary\DictProductAttributesAdapter as DictProductAttributes,
    User\Style\Colors,
    User\Style\Prints,
    User\Style\Fabrics,
    User\Style\Words,
    User\PreferredBodyParts\BodyPart,
    User\Style\Jewelry,
    OutfitType
};

class DictProductSubattributesAdapter extends DictProductSubattributes
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
