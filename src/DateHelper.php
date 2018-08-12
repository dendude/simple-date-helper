<?php
namespace DenDude;

class DateHelper
{
    public static function humanDate($str): ?string
    {
        return self::dateFormat($str, 'd.m.Y');
    }

    public static function sqlDate($str): ?string
    {
        return self::dateFormat($str, 'Y-m-d');
    }

    protected static function dateFormat($str, $format): ?string
    {
        $str = strtotime($str);
        if ($str === false) return null;

        return date($format, $str);
    }
}