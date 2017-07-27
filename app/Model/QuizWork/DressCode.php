<?php

namespace App\Model\QuizWork;

use App\Model\QuizWorkAdapter;
use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class DressCode extends QuizWorkAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CASUAL = 1;
    const SEMI_FORMAL = 2;
    const FORMAL = 3;

    const OPTIONS = [
        [
            'key' => self::CASUAL,
            'value' => 'Casual',
        ],
        [
            'key' => self::SEMI_FORMAL,
            'value' => 'Semi Formal',
        ],
        [
            'key' => self::FORMAL,
            'value' => 'Formal',
        ],
    ];
}
