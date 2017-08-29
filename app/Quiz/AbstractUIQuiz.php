<?php

namespace App\Quiz;

use EBM\UIApplication\AbstractUIApplication;
use App\Model\UserAdapter as User;
use App\Util\DateTimeUtil;
use App\Service\UserProductsService;

abstract class AbstractUIQuiz extends AbstractUIApplication
{
    /**
     * [$quizName The name to be used in the cuestionario route path]
     * @var string
     */
    protected $quizName = '';

    public function __construct(User $user)
    {
        $this->registerInstance('user', $user);

        $quiz = $user->getLatestQuiz();

        $this->registerInstance('quiz', $quiz);

        $this->addSections($this->sections);

        $this->onConstruct();
    }

    public function onConstruct()
    {
        $user = $this->getInstance('user');

        if (!$user->hasUpdatedPassword()) {
            $this->addSectionAfter(\App\Section\UserInfo\ExtraInfo::class, \App\Section\UserInfo\Password::class);
        }

        return $this;
    }

    public function onComplete()
    {
        $quiz = $this->getInstance('quiz');

        $quiz->completed_at = DateTimeUtil::DBNOW();

        $quiz->save();

        (new UserProductsService)
            ->assignProductsToUser($this->getInstance('user'));

        return $this;
    }

    public function getQuizName()
    {
        return $this->quizName;
    }
}
