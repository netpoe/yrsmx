<?php

namespace App\Form\Front;

use EBM\Form\AbstractBaseForm;
use EBM\Field\Field;

use App\Model\{
    LuAddressCountriesAdapter as LuAddressCountries,
    LuAddressStatesAdapter as LuAddressStates
};

use App\Entities\ProductAttribute;

class ShippingAddressForm extends AbstractBaseForm
{
    public function setOnPostActionString()
    {
        $this->onPostActionString = route('front.shipping.add-address');

        return $this;
    }

    public function setFields()
    {
        $this->addField('country_id')
            ->setLabel('País')
            ->setType(Field::TYPE_SELECT)
            ->setOptions(LuAddressCountries::getOptions())
            ->required();

        $this->addField('state_id')
            ->setLabel('Estado')
            ->setType(Field::TYPE_SELECT)
            ->setOptions(LuAddressStates::getOptions())
            ->required();

        $this->addField('zip_code')
            ->setLabel('Código postal')
            ->setType(Field::TYPE_TEXT)
            ->required();

        $this->addField('city')
            ->setLabel('Ciudad')
            ->setType(Field::TYPE_TEXT)
            ->required();

        $this->addField('street')
            ->setLabel('Calle y número exterior')
            ->setType(Field::TYPE_TEXT)
            ->required();

        $this->addField('neighborhood')
            ->setLabel('Colonia')
            ->setType(Field::TYPE_TEXT)
            ->required();

        $this->addField('interior')
            ->setLabel('Número interior (opcional)')
            ->setType(Field::TYPE_TEXT);

        return $this;
    }
}
