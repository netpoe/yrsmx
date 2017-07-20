<?php

namespace App\Section\UserFit;

use App\Section\AbstractUserFitSection;
use EBM\Field\Field;
use App\Model\UserFit\PantsFitHips;
use App\Model\UserFit\PantsFitShape;

class PantsFit extends AbstractUserFitSection
{
    protected $slug = 'pantalones';

    protected $template = 'pants-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $this->addField('pants_fit_hips')
            ->setModel($userFit)
            ->setLabel('¿Qué forma de pantalones prefieres?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(PantsFitHips::getOptions())
            ->setValueFromDb();

        $this->addField('pants_fit_shape')
            ->setModel($userFit)
            ->setLabel('¿Cómo te acomodan mejor los pantalones?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(PantsFitShape::getOptions())
            ->setValueFromDb();

        return $this;
    }
}
