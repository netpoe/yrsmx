<?php

namespace App\Section\UserSizes;

use EBM\Field\Field;
use App\Section\AbstractUserSizesSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class UserBraSizes extends AbstractUserSizesSection
{
    protected $slug = 'tallas-de-bra';

    protected $template = 'tallas-de-bra';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $braBandSizes = new ProductCategory(LuProductCategories::SIZE_BRA_BAND);

        $braCupsSizes = new ProductCategory(LuProductCategories::SIZE_BRA_CUPS);

        $this->addField('bra_band')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de espalda')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($braBandSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        $this->addField('bra_cups')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de copa')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($braCupsSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'bra_band.*' => 'required|numeric',
            'bra_cups.*' => 'required|alpha',
        ];
    }
}
