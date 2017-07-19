<?php

namespace App\Quiz;

use EBM\UIApplication\AbstractUIApplication;
use App\Model\UserAdapter as User;

abstract class AbstractUIQuiz extends AbstractUIApplication
{
    public function __construct(User $user)
    {
        $this->registerInstance('user', $user);

        $this->addSections($this->sections);
    }

    public function onComplete()
    {
        return $this;
    }
}
