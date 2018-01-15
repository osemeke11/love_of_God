<?php
/**
 * Created by PhpStorm.
 * User: eazypen
 * Date: 1/15/2018
 * Time: 5:20 AM
 */

namespace Church\Services;


class Converter
{
    public static function toObject(array $array, $object)
    {
        foreach ($array as $key => $value)
        {
            $object->$key = $value;
        }

        return $object;
    }
}