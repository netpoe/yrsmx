<?php

namespace App\Section;

use EBM\Section\AbstractBaseSection;

abstract class AbstractQuizSection extends AbstractBaseSection
{
    public function setOnPostActionString()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $this->onPostActionString = route('front.quiz.store', ['quiz' => $quiz->id, 'slug' => $this->getSlug()]);

        return $this;
    }

    public function onEnter()
    {
        return $this;
    }
}
