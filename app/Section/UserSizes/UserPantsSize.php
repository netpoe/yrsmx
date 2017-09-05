<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Entities\ProductCategory;

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories
};

class UserPantsSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-pantalones';

    protected $template = 'talla-de-pantalones';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $pantsSizes = new ProductCategory(LuProductCategories::SIZE_PANTS);

        $this->addField('pants')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida para pantalones')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($pantsSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'pants.*' => 'required|numeric',
        ];
    }
}
