<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes
};

class OutfitType extends Model implements InputOptionsContract
{
    use InputOptionsTrait;

    const ATTRIBUTE_ID = LuProductAttributes::OUTFIT_TYPE;

    const CASUAL_WEAR = 1;
    const BASICS = 2;
    const WORK = 3;
    const GET_AWAY = 4;
    const SPORTS_WEAR = 5;
    const MOM_TO_BE = 6;
    const INTIMATES = 7;
    const PARTY_TIME = 8;

    const OPTIONS = [
        self::CASUAL_WEAR => [
            'key' => self::CASUAL_WEAR,
            'value' => 'Casual Wear',
        ],
        self::BASICS => [
            'key' => self::BASICS,
            'value' => 'Basics',
        ],
        self::WORK => [
            'key' => self::WORK,
            'value' => 'Work',
        ],
        self::GET_AWAY => [
            'key' => self::GET_AWAY,
            'value' => 'Get Away',
        ],
        self::SPORTS_WEAR => [
            'key' => self::SPORTS_WEAR,
            'value' => 'Sports Wear',
        ],
        self::MOM_TO_BE => [
            'key' => self::MOM_TO_BE,
            'value' => 'Mom To Be',
        ],
        self::INTIMATES => [
            'key' => self::INTIMATES,
            'value' => 'Intimates',
        ],
        self::PARTY_TIME => [
            'key' => self::PARTY_TIME,
            'value' => 'Party Time',
        ],
    ];
}


