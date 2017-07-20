<?php

namespace App\Section\UserPreferredBodyParts;

use App\Section\AbstractUserPreferredBodyPartsSection;
use EBM\Field\Field;
use App\Util\DateTimeUtil;

class Complete extends AbstractUserPreferredBodyPartsSection
{
    protected $slug = 'completaste-partes-del-cuerpo';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onEnter()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_preferred_body_parts_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
