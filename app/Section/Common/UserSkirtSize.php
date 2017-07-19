<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;
use App\Model\UserSizes\SkirtSizes;

class UserSkirtSize extends AbstractQuizSection
{
    protected $slug = 'talla-de-falda';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('skirt')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida para las faldas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(SkirtSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'skirt' => 'required|alpha',
        ];
    }
}
