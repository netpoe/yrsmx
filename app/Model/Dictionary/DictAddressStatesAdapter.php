<?php

namespace App\Model\Dictionary;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

use App\Model\{
    Dictionary\DictAddressCountriesAdapter as DictAddressCountries
};

class DictAddressStatesAdapter extends DictAddressStates implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        DictAddressCountries::MEXICO => [
            'key' => 1,
            'value' => 'Ciudad de México',
            'country_id' => DictAddressCountries::MEXICO
        ],
    ];
}
