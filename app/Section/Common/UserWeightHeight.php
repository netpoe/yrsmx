<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;

class UserWeightHeight extends AbstractQuizSection
{
    protected $slug = 'altura-y-peso';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('weight')
            ->setModel($userSizes)
            ->setLabel('¿Cuánto pesas?')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. 65')
            ->setHint('En kg. No es necesario escribir las unidades')
            ->setValueFromDb();

        $this->addField('height')
            ->setModel($userSizes)
            ->setLabel('¿Cuánto mides?')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. 1.60')
            ->setHint('En metros. No es necesario escribir las unidades')
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ];
    }
}
