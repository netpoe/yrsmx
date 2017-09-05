<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Entities\ProductCategory;

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories
};

class UserShoesSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-zapatos';

    protected $template = 'talla-de-zapatos';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $shoeSizes = new ProductCategory(LuProductCategories::SIZE_SHOES);

        $this->addField('shoes')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida de zapatos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($shoeSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'shoes.*' => 'required|numeric',
        ];
    }
}
