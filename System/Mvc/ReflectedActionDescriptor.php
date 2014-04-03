<?php
namespace System\Mvc;

/**
 * Description of ActionDescriptor
 *
 * @author Edgar
 */
class ReflectedActionDescriptor extends ActionDescriptor
{
    private $_uniqueId;
    private $_methodInfo;
    private $_actionName;
    private $_controllerDescriptor;

    public function __construct(\System\Reflection\MethodInfo $methodInfo, $actionName, ControllerDescriptor $controllerDescriptor)
    {
        if (!isset($methodInfo))
            throw new \Exception("The methodInfo parameter is null.");

        if (!isset($actionName) || empty($actionName))
            throw new \Exception("The actionName is null or empty.");

        if (!isset($controllerDescriptor))
            throw new \Exception("The controllerDescriptor is null.");

        $this->_methodInfo = $methodInfo;
        $this->_actionName = $actionName;
        $this->_controllerDescriptor = $controllerDescriptor;
        $this->_uniqueId = uniqid();
    }

    public function Execute(ControllerContext $controllerContext, \System\Collections\Dictionary $parameters)
    {
        if (!isset($controllerDescriptor))
            throw new \Exception("The controllerDescriptor is null.");

        if (!isset($parameters))
            throw new \Exception("The parameters is null.");

        $parameterInfos = $this->_methodInfo->GetParameters();
        $dispatcher = new ActionMethodDispatcher($this->_methodInfo);
        $actionReturnValue = $dispatcher->Execute($controllerContext->Controller, array_values( $parameters->getArrayCopy() ) );
        
        return $actionReturnValue;
    }
}
?>