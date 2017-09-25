<?php

namespace App\Model;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

class LuAddressCountriesAdapter extends LuAddressCountries implements InputOptionsContract
{
    use InputOptionsTrait;

    const MEXICO = 1;

    const OPTIONS = [
        self::MEXICO => [
            'key' => self::MEXICO,
            'value' => 'México'
        ],
    ];
}
