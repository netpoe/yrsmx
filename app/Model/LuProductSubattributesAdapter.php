<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
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

class LuProductSubattributesAdapter extends LuProductSubattributes implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        // ATTR::COLORS
        [
            'key' => Colors::BLANCO,
            'value' => Colors::OPTIONS[Colors::BLANCO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::CREMA,
            'value' => Colors::OPTIONS[Colors::CREMA]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::NUDE,
            'value' => Colors::OPTIONS[Colors::NUDE]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::BEIGE,
            'value' => Colors::OPTIONS[Colors::BEIGE]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::CAFE,
            'value' => Colors::OPTIONS[Colors::CAFE]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::GRIS,
            'value' => Colors::OPTIONS[Colors::GRIS]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::NEGRO,
            'value' => Colors::OPTIONS[Colors::NEGRO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::AZUL_CELESTE,
            'value' => Colors::OPTIONS[Colors::AZUL_CELESTE]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::AZUL_REY,
            'value' => Colors::OPTIONS[Colors::AZUL_REY]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::AZUL_MARINO,
            'value' => Colors::OPTIONS[Colors::AZUL_MARINO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::LILA,
            'value' => Colors::OPTIONS[Colors::LILA]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::MORADO,
            'value' => Colors::OPTIONS[Colors::MORADO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::ROSA_PASTEL,
            'value' => Colors::OPTIONS[Colors::ROSA_PASTEL]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::FUCSIA,
            'value' => Colors::OPTIONS[Colors::FUCSIA]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::AQUA,
            'value' => Colors::OPTIONS[Colors::AQUA]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::VERDE,
            'value' => Colors::OPTIONS[Colors::VERDE]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::AMARILLO,
            'value' => Colors::OPTIONS[Colors::AMARILLO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::NARANJA,
            'value' => Colors::OPTIONS[Colors::NARANJA]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::ROJO,
            'value' => Colors::OPTIONS[Colors::ROJO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::VINO,
            'value' => Colors::OPTIONS[Colors::VINO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::MULTICOLOR,
            'value' => Colors::OPTIONS[Colors::MULTICOLOR]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::DORADO,
            'value' => Colors::OPTIONS[Colors::DORADO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],
        [
            'key' => Colors::PLATEADO,
            'value' => Colors::OPTIONS[Colors::PLATEADO]['value'],
            'attribute_id' => LuProductAttributes::COLORS,
        ],

        // ATTR::PRINTS
        [
            'key' => Prints::FLORES,
            'value' => Prints::OPTIONS[Prints::FLORES]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::GRAFICOS,
            'value' => Prints::OPTIONS[Prints::GRAFICOS]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::MILITAR,
            'value' => Prints::OPTIONS[Prints::MILITAR]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::CUADROS,
            'value' => Prints::OPTIONS[Prints::CUADROS]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::LINEAS,
            'value' => Prints::OPTIONS[Prints::LINEAS]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::ESCOCES,
            'value' => Prints::OPTIONS[Prints::ESCOCES]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::TRIBAL,
            'value' => Prints::OPTIONS[Prints::TRIBAL]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::LEOPARDO,
            'value' => Prints::OPTIONS[Prints::LEOPARDO]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::ZEBRA,
            'value' => Prints::OPTIONS[Prints::ZEBRA]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::VIBORA,
            'value' => Prints::OPTIONS[Prints::VIBORA]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::LUNARES,
            'value' => Prints::OPTIONS[Prints::LUNARES]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::PREPPY,
            'value' => Prints::OPTIONS[Prints::PREPPY]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::PAISLEY,
            'value' => Prints::OPTIONS[Prints::PAISLEY]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::BORDADOS,
            'value' => Prints::OPTIONS[Prints::BORDADOS]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],
        [
            'key' => Prints::NINGUNO,
            'value' => Prints::OPTIONS[Prints::NINGUNO]['value'],
            'attribute_id' => LuProductAttributes::PRINTS,
        ],

        // ATTR::FABRICS
        [
            'key' => Fabrics::ALGODON,
            'value' => Fabrics::OPTIONS[Fabrics::ALGODON]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::LYCRA,
            'value' => Fabrics::OPTIONS[Fabrics::LYCRA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::LANA,
            'value' => Fabrics::OPTIONS[Fabrics::LANA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::PANA,
            'value' => Fabrics::OPTIONS[Fabrics::PANA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::NEOPRENO,
            'value' => Fabrics::OPTIONS[Fabrics::NEOPRENO]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::ENCAJE,
            'value' => Fabrics::OPTIONS[Fabrics::ENCAJE]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::CACHEMIR,
            'value' => Fabrics::OPTIONS[Fabrics::CACHEMIR]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::GABARDINA,
            'value' => Fabrics::OPTIONS[Fabrics::GABARDINA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::TERCIOPELO,
            'value' => Fabrics::OPTIONS[Fabrics::TERCIOPELO]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::NYLON,
            'value' => Fabrics::OPTIONS[Fabrics::NYLON]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::GASA,
            'value' => Fabrics::OPTIONS[Fabrics::GASA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::MEZCLILLA,
            'value' => Fabrics::OPTIONS[Fabrics::MEZCLILLA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::TUL,
            'value' => Fabrics::OPTIONS[Fabrics::TUL]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::SEDA,
            'value' => Fabrics::OPTIONS[Fabrics::SEDA]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::TACTO_PIEL,
            'value' => Fabrics::OPTIONS[Fabrics::TACTO_PIEL]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],
        [
            'key' => Fabrics::POLIESTER,
            'value' => Fabrics::OPTIONS[Fabrics::POLIESTER]['value'],
            'attribute_id' => LuProductAttributes::FABRICS,
        ],

        // ATTR::WORDS
        [
            'key' => Words::BOHEMIO,
            'value' => Words::OPTIONS[Words::BOHEMIO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::CONSERVADOR,
            'value' => Words::OPTIONS[Words::CONSERVADOR]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::FEMENINO,
            'value' => Words::OPTIONS[Words::FEMENINO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::ROMANTICO,
            'value' => Words::OPTIONS[Words::ROMANTICO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::MASCULINO,
            'value' => Words::OPTIONS[Words::MASCULINO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::NATURAL,
            'value' => Words::OPTIONS[Words::NATURAL]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::ATREVIDO,
            'value' => Words::OPTIONS[Words::ATREVIDO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::EXCENTRICO,
            'value' => Words::OPTIONS[Words::EXCENTRICO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::GLAMUROSO,
            'value' => Words::OPTIONS[Words::GLAMUROSO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::SEXY,
            'value' => Words::OPTIONS[Words::SEXY]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::TRENDY,
            'value' => Words::OPTIONS[Words::TRENDY]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::DRAMATICO,
            'value' => Words::OPTIONS[Words::DRAMATICO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::CASUAL,
            'value' => Words::OPTIONS[Words::CASUAL]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::ARRIESGADO,
            'value' => Words::OPTIONS[Words::ARRIESGADO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::SENCILLO,
            'value' => Words::OPTIONS[Words::SENCILLO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::DEPORTIVO,
            'value' => Words::OPTIONS[Words::DEPORTIVO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::HIPSTER,
            'value' => Words::OPTIONS[Words::HIPSTER]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::CLASICO,
            'value' => Words::OPTIONS[Words::CLASICO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::ELEGANTE,
            'value' => Words::OPTIONS[Words::ELEGANTE]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::PREPPY,
            'value' => Words::OPTIONS[Words::PREPPY]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::FORMAL,
            'value' => Words::OPTIONS[Words::FORMAL]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::VINTAGE,
            'value' => Words::OPTIONS[Words::VINTAGE]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::CHIC,
            'value' => Words::OPTIONS[Words::CHIC]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::HIPPIE,
            'value' => Words::OPTIONS[Words::HIPPIE]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],
        [
            'key' => Words::ROCKERO,
            'value' => Words::OPTIONS[Words::ROCKERO]['value'],
            'attribute_id' => LuProductAttributes::WORDS,
        ],

        // ATTR::BODY_PART
        [
            'key' => BodyPart::THIGHS,
            'value' => BodyPart::OPTIONS[BodyPart::THIGHS]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::CALVES,
            'value' => BodyPart::OPTIONS[BodyPart::CALVES]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::BUTT,
            'value' => BodyPart::OPTIONS[BodyPart::BUTT]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::ABDOMEN,
            'value' => BodyPart::OPTIONS[BodyPart::ABDOMEN]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::HIPS,
            'value' => BodyPart::OPTIONS[BodyPart::HIPS]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::BREAST,
            'value' => BodyPart::OPTIONS[BodyPart::BREAST]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::SHOULDERS,
            'value' => BodyPart::OPTIONS[BodyPart::SHOULDERS]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],
        [
            'key' => BodyPart::ARMS,
            'value' => BodyPart::OPTIONS[BodyPart::ARMS]['value'],
            'attribute_id' => LuProductAttributes::BODY_PART,
        ],

        // ATTR::JEWELRY
        [
            'key' => Jewelry::ORO,
            'value' => Jewelry::OPTIONS[Jewelry::ORO]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::PLATA,
            'value' => Jewelry::OPTIONS[Jewelry::PLATA]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::FANTASIA,
            'value' => Jewelry::OPTIONS[Jewelry::FANTASIA]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::OVERSIZE,
            'value' => Jewelry::OPTIONS[Jewelry::OVERSIZE]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::DISCRETA,
            'value' => Jewelry::OPTIONS[Jewelry::DISCRETA]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::MODERNA,
            'value' => Jewelry::OPTIONS[Jewelry::MODERNA]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::CLASICA,
            'value' => Jewelry::OPTIONS[Jewelry::CLASICA]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::MINIMAL,
            'value' => Jewelry::OPTIONS[Jewelry::MINIMAL]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],
        [
            'key' => Jewelry::BOHO,
            'value' => Jewelry::OPTIONS[Jewelry::BOHO]['value'],
            'attribute_id' => LuProductAttributes::JEWELRY,
        ],

        // ATTR::OUTFIT_TYPE
        [
            'key' => OutfitType::CASUAL_WEAR,
            'value' => OutfitType::OPTIONS[OutfitType::CASUAL_WEAR]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::BASICS,
            'value' => OutfitType::OPTIONS[OutfitType::BASICS]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::WORK,
            'value' => OutfitType::OPTIONS[OutfitType::WORK]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::GET_AWAY,
            'value' => OutfitType::OPTIONS[OutfitType::GET_AWAY]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::SPORTS_WEAR,
            'value' => OutfitType::OPTIONS[OutfitType::SPORTS_WEAR]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::MOM_TO_BE,
            'value' => OutfitType::OPTIONS[OutfitType::MOM_TO_BE]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::INTIMATES,
            'value' => OutfitType::OPTIONS[OutfitType::INTIMATES]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
        [
            'key' => OutfitType::PARTY_TIME,
            'value' => OutfitType::OPTIONS[OutfitType::PARTY_TIME]['value'],
            'attribute_id' => LuProductAttributes::OUTFIT_TYPE,
        ],
    ];
}
