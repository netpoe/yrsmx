<?php

namespace App\Section\UserFit;

use App\Section\AbstractUserFitSection;
use App\Util\DateTimeUtil;

class Complete extends AbstractUserFitSection
{
    protected $slug = 'completaste-fit';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onEnter()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_fit_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
