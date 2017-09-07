<?php

namespace App\Entities\Contracts;

interface IsSubattributeContract
{
    /**
     * getAttributeId returns the subattribute ATTRIBUTE_ID const
     * @return String
     */
    public static function getAttributeId(): String;

    /**
     * getColumn returns the subattribute COLUMN const
     * @return String
     */
    public static function getColumn(): String;
}
