<?php

namespace App\Section;

abstract class AbstractUserPreferredBodyPartsSection extends AbstractQuizSection
{
    protected $templateLocation = 'user_preferred_body_parts/';

    const BINARY_OPTIONS = [
        [
            'key' => 0,
            'value' => 'Disimular',
        ],
        [
            'key' => 1,
            'value' => 'Resaltar',
        ],
    ];
}
