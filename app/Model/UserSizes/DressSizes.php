<?php

namespace App\Model\UserSizes;

use Illuminate\Database\Eloquent\Model;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\UserSizesAdapter as UserSizes;

class DressSizes extends UserSizes implements InputOptionsContract
{
    use InputOptionsTrait;

    const ECH = 'ECH';
    const CH = 'CH';
    const M = 'M';
    const G = 'G';
    const EG = 'EG';
    const EEG = 'EEG';

    const OPTIONS = [
        [
            'key' => self::ECH,
            'value' => self::ECH,
        ],
        [
            'key' => self::CH,
            'value' => self::CH,
        ],
        [
            'key' => self::M,
            'value' => self::M,
        ],
        [
            'key' => self::G,
            'value' => self::G,
        ],
        [
            'key' => self::EG,
            'value' => self::EG,
        ],
        [
            'key' => self::EEG,
            'value' => self::EEG,
        ],
    ];
}