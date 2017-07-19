<?php

namespace App\Quiz;

use EBM\UIApplication\AbstractUIApplication;
use App\Model\UserAdapter as User;

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

        $quiz->completed_at = new \DateTime;

        $quiz->save();

        return $this;
    }
}
