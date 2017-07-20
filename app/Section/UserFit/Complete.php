<?php

namespace App\Section\UserFit;

use App\Section\AbstractUserFitSection;

class Complete extends AbstractUserFitSection
{
    protected $slug = 'completaste-fit';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onComplete()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_fit = new \DateTime;

        $quiz->save();

        return $this;
    }
}
