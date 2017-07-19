<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;
use App\Model\UserSizes\BlouseSizes;

class UserBlouseSize extends AbstractQuizSection
{
    protected $slug = 'talla-de-blusa';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('blouse')
            ->setModel($userSizes)
            ->setLabel('Selecciona la talla que usas para tus blusas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(BlouseSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'blouse' => 'required|alpha',
        ];
    }
}
