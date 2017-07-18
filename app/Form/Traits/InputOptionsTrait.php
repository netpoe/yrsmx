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
}
