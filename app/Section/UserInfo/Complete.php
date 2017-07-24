<?php

namespace App\Section\UserInfo;

use App\Section\AbstractUserInfoSection;
use EBM\Field\Field;
use App\Util\DateTimeUtil;

class Complete extends AbstractUserInfoSection
{
    protected $slug = 'completaste-datos-basicos';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onComplete()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_info_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
