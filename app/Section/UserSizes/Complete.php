<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Util\DateTimeUtil;

class Complete extends AbstractUserSizesSection
{
    protected $slug = 'completaste-talla';

    protected $template = 'complete';

    public function setFields()
    {
        return $this;
    }

    public function onEnter()
    {
        $quiz = $this->getUIApplication()->getInstance('quiz');

        $quiz->user_sizes_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
