<?php

namespace App\Quiz;

use EBM\UIApplication\AbstractUIApplication;
use App\Model\UserAdapter as User;
use App\Util\DateTimeUtil;

abstract class AbstractUIQuiz extends AbstractUIApplication
{
    public function __construct(User $user)
    {
        $this->registerInstance('user', $user);

        $quiz = $user->getLatestQuiz();

        $this->registerInstance('quiz', $quiz);

        $this->addSections($this->sections);
    }

    public function onComplete()
    {
        $quiz = $this->getInstance('quiz');

        $quiz->completed_at = DateTimeUtil::DBNOW();

        $quiz->save();

        return $this;
    }
}
