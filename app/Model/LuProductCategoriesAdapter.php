<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class LuProductCategoriesAdapter extends LuProductCategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const TYPE = 1;
    const BODY_PART = 2;
    const FIT = 3;
    const BODY_TYPE = 4;

    const OPTIONS = [
        [
            'key' => self::TYPE,
            'value' => 'type',
        ],
        [
            'key' => self::BODY_PART,
            'value' => 'body_part',
        ],
        [
            'key' => self::FIT,
            'value' => 'fit',
        ],
        [
            'key' => self::BODY_TYPE,
            'value' => 'body_type',
        ],
    ];
}
