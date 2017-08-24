<?php

namespace App\Model\UserInfo;

use App\Model\UserInfoAdapter as UserInfo;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class GenderId extends UserInfo implements InputOptionsContract
{
    use InputOptionsTrait;

    const MALE = 1;
    const FEMALE = 2;

    const OPTIONS = [
        [
            'key' => self::MALE,
            'value' => 'Masculino',
        ],
        [
            'key' => self::FEMALE,
            'value' => 'Femenino',
        ]
    ];
}