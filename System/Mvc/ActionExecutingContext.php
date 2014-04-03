<?php
namespace System\Mvc;
/**
 * Description of ActionExecutingContext
 *
 * @author Edgar
 */
class ActionExecutingContext extends ControllerContext
{    
    /**
     *
     * @var \System\Mvc\ActionDescriptor
     */
    private $_actionDescriptor;
    
    private $_actionParameters;
    
    private $_result;
    
    /**
     * 
     * @param ControllerContext $controllerContext
     * @param ActionDescriptor $actionDescriptor
     * @param \System\Collections\Dictionary $actionParameters
     */
    public function __construct(ControllerContext $controllerContext, ActionDescriptor $actionDescriptor, \System\Collections\Dictionary $actionParameters)
    {
        parent::__construct($controllerContext->RequestContext, $controllerContext->Controller);
        
        if(!isset($actionDescriptor))
            throw new \Exception("The actionDescriptor parameter is null.");
        
        if(!isset($actionParameters))
            throw new \Exception("The actionParameters parameter is null.");
        
        $this->_actionDescriptor = $actionDescriptor;
        $this->_actionParameters = $actionParameters;
    }
    
    public function GetActionDescriptor()
    {
        return $this->_actionDescriptor;
    }
    
    public function SetActionDescriptor(ActionDescriptor $actionDescriptor)
    {
        $this->_actionDescriptor = $actionDescriptor;
    }
    
    /**
     * 
     * @return \System\Collections\Dictionary
     */
    public function GetActionParameters()
    {
        return $this->_actionParameters;
    }
    
    public function SetActionParameters($actionParameters)
    {
        $this->_actionParameters = $actionParameters;
    }
    
    /**
     * 
     * @return \System\Mvc\ActionResult
     */
    public function GetResult()
    {
        return $this->_result;
    }
    
    /**
     * 
     * @param \System\Mvc\ActionResult $result
     */
    public function SetResult(ActionResult $result)
    {
        $this->_result = $result;
    }
}
?>