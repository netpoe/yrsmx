<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Util\DateTimeUtil;

class Complete extends AbstractUserStyleSection
{
    protected $slug = 'completaste-estilo';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onEnter()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_style_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
