<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes
};

class BodyPart extends Model implements InputOptionsContract
{
    use InputOptionsTrait;

    const ATTRIBUTE_ID = LuProductAttributes::BODY_PART;

    const THIGHS = 1;
    const CALVES = 2;
    const BUTT = 3;
    const ABDOMEN = 4;
    const HIPS = 5;
    const BREAST = 6;
    const SHOULDERS = 7;
    const ARMS = 8;

    const OPTIONS = [
        self::THIGHS => [
            'key' => self::THIGHS,
            'value' => 'muslos',
        ],
        self::CALVES => [
            'key' => self::CALVES,
            'value' => 'pantorrillas',
        ],
        self::BUTT => [
            'key' => self::BUTT,
            'value' => 'pompas',
        ],
        self::ABDOMEN => [
            'key' => self::ABDOMEN,
            'value' => 'abdomen',
        ],
        self::HIPS => [
            'key' => self::HIPS,
            'value' => 'caderas',
        ],
        self::BREAST => [
            'key' => self::BREAST,
            'value' => 'busto',
        ],
        self::SHOULDERS => [
            'key' => self::SHOULDERS,
            'value' => 'hombros',
        ],
        self::ARMS => [
            'key' => self::ARMS,
            'value' => 'brazos',
        ],
    ];
}
