<?php
namespace System\Mvc;
/**
 * Description of JsonResult
 *
 * @author Edgar
 */
class RedirectToRouteResult extends ActionResult
{
    private $_routeName;
    private $_routeValues;
    
    public function __construct($routeName, $routeValues)
    {
        parent::__construct();
        
        $this->_routeName = $routeName;
        $this->_routeValues = $routeValues;
    }

    public function ExecuteResult(ControllerContext $context){
        $urlHelper = new UrlHelper();
        
        $routes = $this->_routeValues;
        
        $action = $routes["action"];
        $controller = $routes["controller"];
        
        unset($routes["action"]);
        unset($routes["controller"]);
        
        $url = $urlHelper->Action($action, $controller, $routes);
        header("Location: $url");
    }
}
?>