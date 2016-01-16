<?php
namespace System\Mvc;
/**
 * Description of EmptyResult
 *
 * @author Edgar
 */
class EmptyResult extends ActionResult
{
    private static $_instance;

    public static function GetInstance()
    {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c;
        }

        return self::$_instance;
    }

    public function ExecuteResult(ControllerContext $context)
    {
        
    }
}