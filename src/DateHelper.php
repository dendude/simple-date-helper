<?php
namespace DenDude;

class DateHelper
{
    public static function formatDate($str, $format = 'd.m.Y H:i'): ?string
    {
        $str = strtotime($str);
        if ($str === false) return null;

        return date($format, $str);
    }
}