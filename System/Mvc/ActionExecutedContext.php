<?php
namespace System\Mvc;
/**
 * Description of ActionExecutingContext
 *
 * @author Edgar
 */
class ActionExecutedContext extends ControllerContext
{
    /**
     *
     * @var \System\Mvc\ControllerContext
     */
    private $_controllerContext;
    
    /**
     *
     * @var \System\Mvc\ActionDescriptor
     */
    private $_actionDescriptor;
    
    /**
     *
     * @var bool
     */
    private $_canceled;
    
    /**
     *
     * @var \Exception
     */
    private $_exception;
    
    private $_result;
    
    /**
     * 
     * @param ControllerContext $controllerContext
     * @param ActionDescriptor $actionDescriptor
     */
    public function __construct(ControllerContext $controllerContext, ActionDescriptor $actionDescriptor, $canceled = false, \Exception $exception = null)
    {
        parent::__construct($controllerContext->RequestContext, $controllerContext->Controller);
        
        if(!isset($actionDescriptor))
            throw new \Exception("The actionDescriptor parameter is null.");
        
        $this->_controllerContext = $controllerContext;
        $this->_actionDescriptor = $actionDescriptor;
        $this->_canceled = $canceled;
        $this->_exception = $exception;
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
     * @return bool Description
     */
    public function GetCanceled()
    {
        return $this->_canceled;
    }
    
    /**
     * 
     * @param bool $canceled
     */
    public function SetCanceled($canceled)
    {
        $this->_canceled = $canceled;
    }
    
    /**
     * 
     * @return \Exception
     */
    public function GetException()
    {
        return $this->_exception;
    }
    
    /**
     * 
     * @param \Exception $exception
     */
    public function SetException($exception)
    {
        $this->_exception = $exception;
    }
    
    /**
     * 
     * @return \System\Mvc\ActionResult
     */
    public function GetResult()
    {
        return isset($this->_result) ? $this->_result : EmptyResult::GetInstance();
    }
    
    /**
     * 
     * @param \System\Mvc\ActionResult $result
     */
    public function SetResult($result)
    {
        $this->_result = $result;
    }
}
?>