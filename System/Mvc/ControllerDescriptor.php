<?php
namespace System\Mvc;
/**
 * Description of ControllerDescriptor
 *
 * @author Edgar
 */
abstract class ControllerDescriptor extends \System\Object
{
    /**
     * @param ControllerContext $controllerContext
     * @param string $actionName
     */
    public abstract function FindAction(ControllerContext $controllerContext, $actionName);
    public abstract function GetCanonicalActions();
    
    public function GetControllerName()
    {
        
    }
    
    public function GetControllerType()
    {
        
    }
}
?>