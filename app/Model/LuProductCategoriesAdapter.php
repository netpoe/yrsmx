<?php

namespace App\Model;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

use App\Model\{
    UserStyle\Clothes,
    UserPreferredBodyParts\BodyType,
    User\Fit\LowerPartFit,
    User\Fit\UpperPartFit,
    User\Fit\PantsFitHips,
    User\Fit\PantsFitShape,
    UserStyle\Risk,
    UserSizes\BlouseSizes,
    UserSizes\BraBandSizes,
    UserSizes\BraCupsSizes,
    UserSizes\DressSizes,
    UserSizes\PantsSizes,
    UserSizes\ShoesSizes,
    UserSizes\SkirtSizes,
    UserStyle\Shoes,
    UserStyle\Accessories
};

class LuProductCategoriesAdapter extends LuProductCategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const TYPE = 1;
    const LOWER_PART_FIT = 2;
    const UPPER_PART_FIT = 3;
    const BODY_TYPE = 4;
    const PANTS_FIT_SHAPE = 5;
    const PANTS_FIT_HIPS = 6;
    const ACCESSORIES = 7;
    const RISK = 8;
    const SHOES = 9;
    const SIZE_DRESS = 10;
    const SIZE_BLOUSE = 11;
    const SIZE_BRA_BAND = 12;
    const SIZE_BRA_CUPS = 13;
    const SIZE_SKIRT = 14;
    const SIZE_SHOES = 15;
    const SIZE_PANTS = 16;

    const OPTIONS = [
        self::TYPE => [
            'key' => self::TYPE,
            'value' => 'Tipo de producto',
            'subcategory' => Clothes::class,
        ],
        self::LOWER_PART_FIT => [
            'key' => self::LOWER_PART_FIT,
            'value' => 'Fit parte inferior',
            'subcategory' => LowerPartFit::class,
        ],
        self::UPPER_PART_FIT => [
            'key' => self::UPPER_PART_FIT,
            'value' => 'Fit parte superior',
            'subcategory' => UpperPartFit::class,
        ],
        self::BODY_TYPE => [
            'key' => self::BODY_TYPE,
            'value' => 'Tipo de cuerpo',
            'subcategory' => BodyType::class,
        ],
        self::PANTS_FIT_SHAPE => [
            'key' => self::PANTS_FIT_SHAPE,
            'value' => 'Forma del pantalón',
            'subcategory' => PantsFitShape::class,
        ],
        self::PANTS_FIT_HIPS => [
            'key' => self::PANTS_FIT_HIPS,
            'value' => 'Forma del pantalón (caderas)',
            'subcategory' => PantsFitHips::class,
        ],
        self::ACCESSORIES => [
            'key' => self::ACCESSORIES,
            'value' => 'Accesorios',
            'subcategory' => Accessories::class,
        ],
        self::RISK => [
            'key' => self::RISK,
            'value' => 'Riesgo',
            'subcategory' => Risk::class,
        ],
        self::SHOES => [
            'key' => self::SHOES,
            'value' => 'Zapatos',
            'subcategory' => Shoes::class,
        ],
        self::SIZE_DRESS => [
            'key' => self::SIZE_DRESS,
            'value' => 'Talla de vestido',
            'subcategory' => DressSizes::class,
        ],
        self::SIZE_BLOUSE => [
            'key' => self::SIZE_BLOUSE,
            'value' => 'Talla de blusa',
            'subcategory' => BlouseSizes::class,
        ],
        self::SIZE_BRA_BAND => [
            'key' => self::SIZE_BRA_BAND,
            'value' => 'Talla de bra (espalda)',
            'subcategory' => BraBandSizes::class,
        ],
        self::SIZE_BRA_CUPS => [
            'key' => self::SIZE_BRA_CUPS,
            'value' => 'Talla de bra (copas)',
            'subcategory' => BraCupsSizes::class,
        ],
        self::SIZE_SKIRT => [
            'key' => self::SIZE_SKIRT,
            'value' => 'Talla de falda',
            'subcategory' => SkirtSizes::class,
        ],
        self::SIZE_SHOES => [
            'key' => self::SIZE_SHOES,
            'value' => 'Talla de zapatos',
            'subcategory' => ShoesSizes::class,
        ],
        self::SIZE_PANTS => [
            'key' => self::SIZE_PANTS,
            'value' => 'Talla de pantalones',
            'subcategory' => PantsSizes::class,
        ],
    ];
}
