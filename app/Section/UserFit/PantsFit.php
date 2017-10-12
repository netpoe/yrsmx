<?php

namespace App\Section\UserFit;

use EBM\Field\Field;
use App\Section\AbstractUserFitSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class PantsFit extends AbstractUserFitSection
{
    protected $slug = 'pantalones';

    protected $template = 'pants-fit';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userFit = $quiz->userFit;

        $pantsFitShape = new ProductCategory(LuProductCategories::PANTS_FIT_SHAPE);

        $pantsFitHips = new ProductCategory(LuProductCategories::PANTS_FIT_HIPS);

        $this->addField('pants_fit_hips')
            ->setModel($userFit)
            ->setLabel('¿Qué forma de pantalones prefieres?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($pantsFitHips->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        $this->addField('pants_fit_shape')
            ->setModel($userFit)
            ->setLabel('¿Cómo te acomodan mejor los pantalones?')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($pantsFitShape->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }
}
