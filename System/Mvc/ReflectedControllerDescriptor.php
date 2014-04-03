<?php
namespace System\Mvc;

/**
 * Description of ReflectedControllerDescriptor
 *
 * @author Edgar
 */
class ReflectedControllerDescriptor extends ControllerDescriptor
{

    /**
     *
     * @var \System\Type 
     */
    private $_controllerType;

    public function __construct(\System\Type $controllerType)
    {
        $this->_controllerType = $controllerType;
    }

    /**
     * 
     * @param \System\Mvc\ControllerContext $controllerContext
     * @param string $actionName
     * @throws \Exception
     * @return \System\Mvc\ActionDescriptor Action descriptor
     */
    public function FindAction(ControllerContext $controllerContext, $actionName)
    {
        if (!isset($controllerContext))
            throw new \Exception("The controllerContext parameter is null");

        if (!isset($actionName) || empty($actionName))
            throw new \Exception("The actionName parameter is null or empty.");

        $methodInfo = $this->_controllerType->GetMethod($actionName);
        $reflectedAction = new ReflectedActionDescriptor($methodInfo, $actionName, $this);

        return $reflectedAction;
    }

    public function GetCanonicalActions()
    {
        
    }

    public function GetControllerType()
    {
        return $this->_controllerType;
    }
}
?>