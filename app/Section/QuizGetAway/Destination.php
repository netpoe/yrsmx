<?php

namespace App\Section\QuizGetAway;

use App\Section\AbstractQuizGetAwaySection;
use EBM\Field\Field;
use App\Model\Quiz\GetAway\Destination as UserDestination;

class Destination extends AbstractQuizGetAwaySection
{
    protected $slug = 'a-donde-vas';

    protected $template = 'destination';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $getAway = $quiz->getAway;

        $this->addField('destination')
            ->setModel($getAway)
            ->setLabel('Selecciona 1 opción')
            ->setType(Field::TYPE_RADIO)
            ->setOptions(UserDestination::getOptions())
            ->required()
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'destination' => 'required',
            'destination.*' => 'array',
        ];
    }
}
