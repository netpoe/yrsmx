<?php

namespace App\Section\UserFit;

use App\Section\AbstractUserFitSection;
use EBM\Field\Field;
use App\Model\UserFit\LowerPartFit as LowerPartFitModel;

class LowerPartFit extends AbstractUserFitSection
{
    protected $slug = 'parte-inferior';

    protected $template = 'lower-part-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $this->addField('lower_part_fit')
            ->setModel($userFit)
            ->setLabel('¿Cómo prefieres que te queden las prendas en la parte inferior?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(LowerPartFitModel::getOptions())
            ->setValueFromDb();

        return $this;
    }
}
