<?php
namespace System\Web;
/**
 * Description of HttpApplication
 *
 * @author Edgar
 */
abstract class HttpApplication
{
    /**
     * @return HttpApplicationState
     */
    public function GetApplication()
    {
        
    }
    
    /**
     * @return HttpServerUtility
     */
    public function GetServer()
    {
        
    }
    /**
     * @return HttpContext
     */
    public function GetContext()
    {
        
    }
    public abstract function Start();
    
    public function &__get($name)
    {
        $method = "Get".$name;
        if(method_exists($this, $method))
            return $this->$method();
        
        return null;
    }
}
?>