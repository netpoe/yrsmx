<?php

namespace App\Model;

use App\Form\{
    Contract\InputOptionsContract,
    Traits\InputOptionsTrait
};

use App\Model\{
    LuAddressCountriesAdapter as LuAddressCountries
};

class LuAddressStatesAdapter extends LuAddressStates implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        LuAddressCountries::MEXICO => [
            'key' => 1,
            'value' => 'Ciudad de México',
            'country_id' => LuAddressCountries::MEXICO
        ],
    ];
}
