<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class Accessories extends AbstractUserStyleSection
{
    protected $slug = 'accesorios';

    protected $template = 'accessories';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $accessories = new ProductCategory(DictProductCategories::ACCESSORIES);

        $this->addField('accessories')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más accesorios')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($accessories->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'accessories' => 'required',
            'accessories.*.*' => 'array',
        ];
    }
}
