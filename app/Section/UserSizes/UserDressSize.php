<?php

namespace App\Section\UserSizes;

use EBM\Field\Field;

use App\Section\AbstractUserSizesSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class UserDressSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-vestido';

    protected $template = 'talla-de-vestido';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $dressSizes = new ProductCategory(LuProductCategories::SIZE_DRESS);

        $this->addField('dress')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de vestido')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($dressSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'dress.*' => 'required|alpha',
        ];
    }
}
