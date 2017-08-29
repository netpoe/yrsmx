<?php

namespace App\Form\Traits;

trait InputOptionsTrait
{
    public static function getOptions(): Array
    {
        $values = static::OPTIONS;

        if (!$values) {
            throw new \Exception('Values are empty');
        }

        foreach ($values as $value) {
            if (!array_key_exists('key', $value)) {
                throw new \Exception('Options structure lacks [key]');
            }

            if (!array_key_exists('value', $value)) {
                throw new \Exception('Options structure lacks [value]');
            }
        }

        return static::OPTIONS;
    }

    public static function getOptionsValue($key)
    {
        $options = self::getOptions();

        return $options[$key]['value'] ?? null;
    }

    public static function getOptionsKeyValue($key, String $index)
    {
        $options = self::getOptions();

        foreach ($options as $option) {
            if ($option['key'] == $key) {
                return $option[$index];
            }
        }

        return null;
    }

    public static function getCheckboxOptionsString(String $str = ''): String
    {
        $result = '';

        if (!$str) {
            return $result;
        }

        $options = self::getOptions();

        foreach (explode('|', $str) as $value) {
            foreach ($options as $option) {
                if ((string) $option['key'] == $value) {
                    $result .= $option['value'] . ' · ';
                }
            }
        }

        return substr($result, 0, -3);
    }
}









