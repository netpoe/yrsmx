<?php

namespace App\Section\UserFit;

use App\Section\AbstractUserFitSection;
use EBM\Field\Field;
use App\Model\UserFit\UpperPartFit as UpperPartFitModel;

class UpperPartFit extends AbstractUserFitSection
{
    protected $slug = 'parte-superior';

    protected $template = 'upper-part-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $this->addField('upper_part_fit')
            ->setModel($userFit)
            ->setLabel('¿Cómo prefieres que te queden las prendas en la parte superior?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(UpperPartFitModel::getOptions())
            ->setValueFromDb();

        return $this;
    }
}
