<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes,
    UserStyle\Colors,
    UserStyle\Prints,
    UserStyle\Accessories,
    UserStyle\Clothes,
    UserStyle\Fabrics,
    UserStyle\Jewelry,
    UserStyle\Risk,
    UserStyle\Shoes,
    UserStyle\Words,
    UserSizes\BlouseSizes,
    UserSizes\BraBandSizes,
    UserSizes\BraCupsSizes,
    UserSizes\DressSizes,
    UserSizes\PantsSizes,
    UserSizes\ShoesSizes,
    UserSizes\SkirtSizes
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

        // ATTR::CLOTHES
        [
            'key' => Clothes::VESTIDOS,
            'value' => Clothes::OPTIONS[Clothes::VESTIDOS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::CHAMARRAS,
            'value' => Clothes::OPTIONS[Clothes::CHAMARRAS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::SHORTS,
            'value' => Clothes::OPTIONS[Clothes::SHORTS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::CAMISAS_DE_VESTIR,
            'value' => Clothes::OPTIONS[Clothes::CAMISAS_DE_VESTIR]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::BLUSAS,
            'value' => Clothes::OPTIONS[Clothes::BLUSAS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::PLAYERAS,
            'value' => Clothes::OPTIONS[Clothes::PLAYERAS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::GABARDINAS,
            'value' => Clothes::OPTIONS[Clothes::GABARDINAS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::SACOS,
            'value' => Clothes::OPTIONS[Clothes::SACOS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::FALDAS,
            'value' => Clothes::OPTIONS[Clothes::FALDAS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::PANTALONES_CASUALES,
            'value' => Clothes::OPTIONS[Clothes::PANTALONES_CASUALES]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::TRAJE_SASTRE,
            'value' => Clothes::OPTIONS[Clothes::TRAJE_SASTRE]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::ABRIGOS,
            'value' => Clothes::OPTIONS[Clothes::ABRIGOS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::JUMPSUITS,
            'value' => Clothes::OPTIONS[Clothes::JUMPSUITS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::CROP_TOPS,
            'value' => Clothes::OPTIONS[Clothes::CROP_TOPS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::LEGGINGS,
            'value' => Clothes::OPTIONS[Clothes::LEGGINGS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::PANTALONES_DE_VESTIR,
            'value' => Clothes::OPTIONS[Clothes::PANTALONES_DE_VESTIR]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::SUETERES,
            'value' => Clothes::OPTIONS[Clothes::SUETERES]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::JEANS,
            'value' => Clothes::OPTIONS[Clothes::JEANS]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::TRAJES_DE_BANO,
            'value' => Clothes::OPTIONS[Clothes::TRAJES_DE_BANO]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::BODIES,
            'value' => Clothes::OPTIONS[Clothes::BODIES]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],
        [
            'key' => Clothes::BRALETTES,
            'value' => Clothes::OPTIONS[Clothes::BRALETTES]['value'],
            'attribute_id' => LuProductAttributes::CLOTHES,
        ],

        // ATTR::RISK
        [
            'key' => Risk::FIRST,
            'value' => Risk::OPTIONS[Risk::FIRST]['value'],
            'attribute_id' => LuProductAttributes::RISK,
        ],
        [
            'key' => Risk::TRENDY,
            'value' => Risk::OPTIONS[Risk::TRENDY]['value'],
            'attribute_id' => LuProductAttributes::RISK,
        ],
        [
            'key' => Risk::ORIGINAL,
            'value' => Risk::OPTIONS[Risk::ORIGINAL]['value'],
            'attribute_id' => LuProductAttributes::RISK,
        ],
        [
            'key' => Risk::CLASSIC,
            'value' => Risk::OPTIONS[Risk::CLASSIC]['value'],
            'attribute_id' => LuProductAttributes::RISK,
        ],

        // ATTR::SHOES
        [
            'key' => Shoes::TENNIS,
            'value' => Shoes::OPTIONS[Shoes::TENNIS]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
        ],
        [
            'key' => Shoes::FLATS,
            'value' => Shoes::OPTIONS[Shoes::FLATS]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
        ],
        [
            'key' => Shoes::SANDALIAS,
            'value' => Shoes::OPTIONS[Shoes::SANDALIAS]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
        ],
        [
            'key' => Shoes::TACONES,
            'value' => Shoes::OPTIONS[Shoes::TACONES]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
        ],
        [
            'key' => Shoes::PLATAFORMAS,
            'value' => Shoes::OPTIONS[Shoes::PLATAFORMAS]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
        ],
        [
            'key' => Shoes::BOTAS,
            'value' => Shoes::OPTIONS[Shoes::BOTAS]['value'],
            'attribute_id' => LuProductAttributes::SHOES,
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

        // ATTR::ACCESSORIES
        [
            'key' => Accessories::BOLSAS,
            'value' => Accessories::OPTIONS[Accessories::BOLSAS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::LENTES_DE_SOL,
            'value' => Accessories::OPTIONS[Accessories::LENTES_DE_SOL]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::SOMBREROS,
            'value' => Accessories::OPTIONS[Accessories::SOMBREROS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::COLLARES,
            'value' => Accessories::OPTIONS[Accessories::COLLARES]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::FOULARD,
            'value' => Accessories::OPTIONS[Accessories::FOULARD]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::CINTURONES,
            'value' => Accessories::OPTIONS[Accessories::CINTURONES]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::PULSERAS,
            'value' => Accessories::OPTIONS[Accessories::PULSERAS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::ZAPATOS,
            'value' => Accessories::OPTIONS[Accessories::ZAPATOS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::ANILLOS,
            'value' => Accessories::OPTIONS[Accessories::ANILLOS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::ARETES,
            'value' => Accessories::OPTIONS[Accessories::ARETES]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],
        [
            'key' => Accessories::EARCUFFS,
            'value' => Accessories::OPTIONS[Accessories::EARCUFFS]['value'],
            'attribute_id' => LuProductAttributes::ACCESSORIES,
        ],

        // ATTR::SIZE_DRESS
        [
            'key' => DressSizes::ECH,
            'value' => DressSizes::ECH,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::CH,
            'value' => DressSizes::CH,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::M,
            'value' => DressSizes::M,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::G,
            'value' => DressSizes::G,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::EG,
            'value' => DressSizes::EG,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],
        [
            'key' => DressSizes::EEG,
            'value' => DressSizes::EEG,
            'attribute_id' => LuProductAttributes::SIZE_DRESS,
        ],

        // ATTR::SIZE_BLOUSE
        [
            'key' => BlouseSizes::ECH,
            'value' => BlouseSizes::ECH,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::CH,
            'value' => BlouseSizes::CH,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::M,
            'value' => BlouseSizes::M,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::G,
            'value' => BlouseSizes::G,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::EG,
            'value' => BlouseSizes::EG,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],
        [
            'key' => BlouseSizes::EEG,
            'value' => BlouseSizes::EEG,
            'attribute_id' => LuProductAttributes::SIZE_BLOUSE,
        ],

        // ATTR::SIZE_BRA_BAND
        [
            'key' => BraBandSizes::SIZE_30,
            'value' => BraBandSizes::SIZE_30,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_32,
            'value' => BraBandSizes::SIZE_32,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_34,
            'value' => BraBandSizes::SIZE_34,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_36,
            'value' => BraBandSizes::SIZE_36,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_38,
            'value' => BraBandSizes::SIZE_38,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_40,
            'value' => BraBandSizes::SIZE_40,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],
        [
            'key' => BraBandSizes::SIZE_42,
            'value' => BraBandSizes::SIZE_42,
            'attribute_id' => LuProductAttributes::SIZE_BRA_BAND,
        ],

        // ATTR::SIZE_BRA_CUPS
        [
            'key' => BraCupsSizes::SIZE_A,
            'value' => BraCupsSizes::SIZE_A,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_C,
            'value' => BraCupsSizes::SIZE_C,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_D,
            'value' => BraCupsSizes::SIZE_D,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_E,
            'value' => BraCupsSizes::SIZE_E,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_F,
            'value' => BraCupsSizes::SIZE_F,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],
        [
            'key' => BraCupsSizes::SIZE_G,
            'value' => BraCupsSizes::SIZE_G,
            'attribute_id' => LuProductAttributes::SIZE_BRA_CUPS,
        ],

        // ATTR::SIZE_SKIRT
        [
            'key' => SkirtSizes::ECH,
            'value' => SkirtSizes::ECH,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::CH,
            'value' => SkirtSizes::CH,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::M,
            'value' => SkirtSizes::M,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::G,
            'value' => SkirtSizes::G,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::EG,
            'value' => SkirtSizes::EG,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],
        [
            'key' => SkirtSizes::EEG,
            'value' => SkirtSizes::EEG,
            'attribute_id' => LuProductAttributes::SIZE_SKIRT,
        ],

        // ATTR::SIZE_SHOES
        [
            'key' => ShoesSizes::SIZE_22,
            'value' => ShoesSizes::SIZE_22,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_22_5,
            'value' => ShoesSizes::SIZE_22_5,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_23,
            'value' => ShoesSizes::SIZE_23,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_23_5,
            'value' => ShoesSizes::SIZE_23_5,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_24,
            'value' => ShoesSizes::SIZE_24,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_24_5,
            'value' => ShoesSizes::SIZE_24_5,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_25,
            'value' => ShoesSizes::SIZE_25,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_25_5,
            'value' => ShoesSizes::SIZE_25_5,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_26,
            'value' => ShoesSizes::SIZE_26,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_26_5,
            'value' => ShoesSizes::SIZE_26_5,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],
        [
            'key' => ShoesSizes::SIZE_27,
            'value' => ShoesSizes::SIZE_27,
            'attribute_id' => LuProductAttributes::SIZE_SHOES,
        ],

        // ATTR::SIZE_PANTS
        [
            'key' => PantsSizes::SIZE_1,
            'value' => PantsSizes::SIZE_1,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_3,
            'value' => PantsSizes::SIZE_3,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_5,
            'value' => PantsSizes::SIZE_5,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_7,
            'value' => PantsSizes::SIZE_7,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_9,
            'value' => PantsSizes::SIZE_9,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_11,
            'value' => PantsSizes::SIZE_11,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_13,
            'value' => PantsSizes::SIZE_13,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
        [
            'key' => PantsSizes::SIZE_15,
            'value' => PantsSizes::SIZE_15,
            'attribute_id' => LuProductAttributes::SIZE_PANTS,
        ],
    ];
}
