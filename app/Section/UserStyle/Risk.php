<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class Risk extends AbstractUserStyleSection
{
    protected $slug = 'riesgo';

    protected $template = 'risk';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $risk = new ProductCategory(LuProductCategories::RISK);

        $this->addField('risk')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más opciones')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($risk->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'risk' => 'required',
            'risk.*' => 'required|array',
        ];
    }
}
