<?php

namespace App\Model\User\Info;

use App\Model\User\UserInfoAdapter as UserInfo;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class GenderId extends UserInfo implements InputOptionsContract
{
    use InputOptionsTrait;

    const MALE = 1;
    const FEMALE = 2;

    const OPTIONS = [
        self::MALE => [
            'key' => self::MALE,
            'value' => 'Masculino',
        ],
        self::FEMALE => [
            'key' => self::FEMALE,
            'value' => 'Femenino',
        ]
    ];
}
