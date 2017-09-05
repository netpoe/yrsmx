<?php

namespace App\Section\UserPreferredBodyParts;

use EBM\Field\Field;
use App\Section\AbstractUserPreferredBodyPartsSection;
use App\Entities\ProductCategory;

use App\Model\{
    LuProductCategoriesAdapter as LuProductCategories
};

class BodyType extends AbstractUserPreferredBodyPartsSection
{
    protected $slug = 'forma-del-cuerpo';

    protected $template = 'body-type';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userPreferredBodyParts = $quiz->userPreferredBodyParts;

        $bodyType = new ProductCategory(LuProductCategories::BODY_TYPE);

        $this->addField('body_type')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Selecciona la forma del cuerpo que más se asemeje a tu figura')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($bodyType->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }
}
