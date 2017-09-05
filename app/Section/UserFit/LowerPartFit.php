<?php

namespace App\Section\UserFit;

use EBM\Field\Field;
use App\Section\AbstractUserFitSection;
use App\Entities\ProductCategory;

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories
};

class LowerPartFit extends AbstractUserFitSection
{
    protected $slug = 'parte-inferior';

    protected $template = 'lower-part-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $lowerPartFit = new ProductCategory(LuProductCategories::LOWER_PART_FIT);

        $this->addField('lower_part_fit')
            ->setModel($userFit)
            ->setLabel('¿Cómo prefieres que te queden las prendas en la parte inferior?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($lowerPartFit->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }
}
