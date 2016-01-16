<?php
namespace System;
/**
 * @author Edgar
 */
class String extends \System\Object
{
    public static function IsNullOrEmpty($str)
    {
        return !isset($str) || empty($str);
    }
}