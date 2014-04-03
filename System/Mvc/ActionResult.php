<?php
namespace System\Mvc;
/**
 * Description of ActionResult
 *
 * @author Edgar
 */
abstract class ActionResult
{
    protected function __construct()
    {
        
    }
    
    public function &__get($name)
    {
        $method = "Get".$name;
        if(method_exists($this, $method))
            return $this->$method();
        
        return null;
    }
    
    public function __set($name, $value)
    {
        $method = "Set".$name;
        if(method_exists($this, $method))
            $this->$method($value);
        else
            throw new \Exception("This property can not be setted");
    }
    
    public abstract function ExecuteResult(ControllerContext $context);
}
?>