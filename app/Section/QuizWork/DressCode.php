<?php

namespace App\Section\QuizWork;

use App\Section\AbstractQuizWorkSection;
use EBM\Field\Field;
use App\Model\QuizWork\DressCode as UserDressCode;

class DressCode extends AbstractQuizWorkSection
{
    protected $slug = 'dress-code';

    protected $template = 'dress-code';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $work = $quiz->work;

        $this->addField('dress_code')
            ->setModel($work)
            ->setLabel('Selecciona 1 opción')
            ->setType(Field::TYPE_RADIO)
            ->setOptions(UserDressCode::getOptions())
            ->required()
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'dress_code' => 'required',
            'dress_code.*' => 'array',
        ];
    }
}
