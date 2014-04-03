<?php
namespace System\Mvc;
/**
 * Description of ActionDescriptor
 *
 * @author Edgar
 */
abstract class ActionDescriptor
{
    private $_actionName;
    
    public function GetActionName()
    {
        return $this->_actionName;
    }
    
    public abstract function Execute(ControllerContext $controllerContext, \System\Collections\Dictionary $parameters);
    
    public function &__get($name)
    {
        $method = "Get".$name;
        if(method_exists($this, $method))
            return $this->$method();
        
        return null;
    }
}
?>
