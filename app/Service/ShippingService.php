<?php

namespace App\Service;

use Netpoe\EstafetaAPI\{
    Cotizador,
    Parser,
    ServiceType
};

 class ShippingService
 {
    const ORIGIN_ZIP_CODE = '03200';

    const WEIGHT = 28;

    const LENGTH = 34;

    const HEIGHT = 56;

    const WIDTH = 25;

    public $destinyZipCode;

    public $calculator;

    public function setDestinyZipCode(String $destinyZipCode)
    {
        $this->destinyZipCode = $destinyZipCode;

        return $this;
    }

    public function getQuotation(): Parser
    {
        return $this->calculator->getQuotation();
    }

    public function calcShipping()
    {
        $cotizador = new Cotizador;

        try {
            $cotizador->setType()
                ->isPackage()
                ->setOriginZipCode(self::ORIGIN_ZIP_CODE)
                ->setDestinyZipCode($this->destinyZipCode)
                ->setWeight(self::WEIGHT)
                ->setLength(self::LENGTH)
                ->setHeight(self::HEIGHT)
                ->setWidth(self::WIDTH);

            $this->calculator = $cotizador->quote();

        } catch (\Exception $e) {
            error_log($e->getMessage());
            $this->calculator = $cotizador;
        }

        return $this;
    }
 }
