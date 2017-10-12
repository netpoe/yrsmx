<?php

namespace App\Model\Outfit;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

use App\Model\{
    Dictionary\LuProductAttributesAdapter as LuProductAttributes
};

class OutfitTypeAdapter extends OutfitType implements InputOptionsContract
{
    use InputOptionsTrait;

    const ATTRIBUTE_ID = LuProductAttributes::OUTFIT_TYPE;

    const COLUMN = 'outfit_type';

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
            'uiQuizName' => 'CasualWear',
        ],
        self::BASICS => [
            'key' => self::BASICS,
            'value' => 'Basics',
            'uiQuizName' => 'Basics',
        ],
        self::WORK => [
            'key' => self::WORK,
            'value' => 'Work',
            'uiQuizName' => 'Work',
        ],
        self::GET_AWAY => [
            'key' => self::GET_AWAY,
            'value' => 'Get Away',
            'uiQuizName' => 'GetAway',
        ],
        self::SPORTS_WEAR => [
            'key' => self::SPORTS_WEAR,
            'value' => 'Sports Wear',
            'uiQuizName' => 'SportsWear',
        ],
        self::MOM_TO_BE => [
            'key' => self::MOM_TO_BE,
            'value' => 'Mom To Be',
            'uiQuizName' => 'MomToBe',
        ],
        self::INTIMATES => [
            'key' => self::INTIMATES,
            'value' => 'Intimates',
            'uiQuizName' => 'Intimates',
        ],
        self::PARTY_TIME => [
            'key' => self::PARTY_TIME,
            'value' => 'Party Time',
            'uiQuizName' => 'PartyTime',
        ],
    ];
}


