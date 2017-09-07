<?php

namespace App\Entities\Traits;

use App\Model\LuProductSubattributesAdapter as LuProductSubattributes;

trait IsSubattributeTrait
{
    /**
     * getAttributeId returns the subattribute ATTRIBUTE_ID const
     * @return String
     */
    public static function getAttributeId(): String
    {
        return static::ATTRIBUTE_ID;
    }

    /**
     * getColumn returns the subattribute COLUMN const
     * @return String
     */
    public static function getColumn(): String
    {
        return static::COLUMN;
    }

    /**
     * getSubattributeValuesString Returns a formatted string of subattribute values
     * @param  String|string $subattributeIds the value of the current relationship
     * @return String
     */
    public static function getSubattributeValuesString(String $subattributeIds = ''): String
    {
        $result = '';

        if (!$subattributeIds) {
            return $result;
        }

        foreach (explode('|', $subattributeIds) as $id) {
            $result .= LuProductSubattributes::find($id)->value . ' · ';
        }

        return substr($result, 0, -3);
    }
}
