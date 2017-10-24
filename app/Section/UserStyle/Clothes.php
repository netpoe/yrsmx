<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class Clothes extends AbstractUserStyleSection
{
    protected $slug = 'prendas';

    protected $template = 'clothes';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $clothes = new ProductCategory(DictProductCategories::TYPE);

        $this->addField('clothes')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más prendas')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($clothes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'clothes' => 'required',
            'clothes.*.*' => 'numeric',
        ];
    }
}
