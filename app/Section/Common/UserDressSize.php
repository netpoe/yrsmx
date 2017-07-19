<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;
use App\Model\UserSizes\DressSizes;

class UserDressSize extends AbstractQuizSection
{
    protected $slug = 'talla-de-vestido';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('dress')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de vestido')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(DressSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'dress' => 'required|alpha',
        ];
    }
}
