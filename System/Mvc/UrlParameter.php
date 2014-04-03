<?php
namespace System\Mvc;
/**
 * Description of UrlParameter
 *
 * @author Edgar
 */
abstract class UrlParameter extends \System\Object
{
    /**
     * 
     * @return \UrlParameter
     */
    public static function GetOptional()
    {
        return new OptionalUrlParameter();
    }
    abstract function __toString();
}
?>