<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class OutfitType extends Model implements InputOptionsContract
{
    use InputOptionsTrait;

    const CASUAL_WEAR = 1;
    const BASICS = 2;
    const WORK = 3;
    const GET_AWAY = 4;
    const SPORTS_WEAR = 5;
    const MOM_TO_BE = 6;
    const INTIMATES = 7;
    const PARTY_TIME = 8;

    const OPTIONS = [
        [
            'key' => self::CASUAL_WEAR,
            'value' => 'Casual Wear',
        ],
        [
            'key' => self::BASICS,
            'value' => 'Basics',
        ],
        [
            'key' => self::WORK,
            'value' => 'Work',
        ],
        [
            'key' => self::GET_AWAY,
            'value' => 'Get Away',
        ],
        [
            'key' => self::SPORTS_WEAR,
            'value' => 'Sports Wear',
        ],
        [
            'key' => self::MOM_TO_BE,
            'value' => 'Mom To Be',
        ],
        [
            'key' => self::INTIMATES,
            'value' => 'Intimates',
        ],
        [
            'key' => self::PARTY_TIME,
            'value' => 'Party Time',
        ],
    ];
}


