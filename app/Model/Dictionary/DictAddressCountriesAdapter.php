<?php

namespace App\Model\Dictionary;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

class DictAddressCountriesAdapter extends DictAddressCountries implements InputOptionsContract
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
