<?php
namespace System\Mvc;

/**
 * Description of ActionMethodDispatcher
 *
 * @author Edgar
 */
class ActionMethodDispatcher
{
    private $_methodInfo;
    
    public function __construct(\System\Reflection\MethodInfo $methodInfo)
    {
        $this->_methodInfo = $methodInfo;
    }

    public function Execute(ControllerBase $controller, $parameters)
    {
        $actionResult = call_user_func_array(array($controller, $this->_methodInfo->GetName()), $parameters);
        return $actionResult;
    }
}
?>