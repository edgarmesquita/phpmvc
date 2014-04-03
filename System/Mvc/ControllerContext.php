<?php
namespace System\Mvc;
use System\Routing\RequestContext;
/**
 * Description of ControllerContext
 *
 * @author Edgar
 */
class ControllerContext extends \System\Object
{
    /**
     *
     * @var \System\Mvc\ControllerBase
     */
    private $_controller;
    
    /**
     *
     * @var \System\Routing\RequestContext
     */
    private $_requestContext;
    
    /**
     *
     * @var \System\Web\HttpContextBase
     */
    private $_httpContext;
    
    /**
     *
     * @var \System\Routing\RouteData
     */
    private $_routeData;
    
    public function __construct(RequestContext $requestContext, \System\Mvc\ControllerBase $controller)
    {
        $this->_requestContext = $requestContext;
        $this->_controller = $controller;
        $this->_controller->ControllerContext = $this;
    }
    
    /**
     * Gets the controller.
     * @return ControllerBase
     */
    public function GetController()
    {
        return $this->_controller;
    }
    
    /**
     * Sets the controller.
     * @param ControllerBase $value
     */
    public function SetController($value)
    {
        $this->_controller = $value;
    }
    
    /**
     * 
     * @return RequestContext
     */
    public function GetRequestContext()
    {
        if(!isset($this->_requestContext))
        {
            $httpContext = isset($this->_httpContext) ? $this->_httpContext : new \System\Web\EmptyHttpContext();
            $routeData = isset($this->_routeData) ? $this->_routeData : null;
            $this->_requestContext = new RequestContext($httpContext, $routeData);
        }
        return $this->_requestContext;
    }
    
    public function GetHttpContext()
    {
        if(!isset($this->_httpContext))
        {
            $this->_httpContext = isset( $this->_requestContext) ? $this->_requestContext->HttpContext : new \System\Web\EmptyHttpContext();
        }
        return $this->_httpContext;
    }
    
    public function GetRouteData()
    {
        if(!isset($this->_routeData))
        {
            $this->_routeData = isset($this->_requestContext) ? $this->_requestContext->RouteData : new \System\Routing\RouteData();
        }
        return $this->_routeData;
    }
}

?>
