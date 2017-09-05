<?php

namespace App\Section\UserFit;

use EBM\Field\Field;
use App\Section\AbstractUserFitSection;
use App\Entities\ProductCategory;

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories
};

class UpperPartFit extends AbstractUserFitSection
{
    protected $slug = 'parte-superior';

    protected $template = 'upper-part-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $upperPartFit = new ProductCategory(LuProductCategories::UPPER_PART_FIT);

        $this->addField('upper_part_fit')
            ->setModel($userFit)
            ->setLabel('¿Cómo prefieres que te queden las prendas en la parte superior?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($upperPartFit->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }
}
