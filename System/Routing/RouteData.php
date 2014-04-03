<?php
namespace System\Routing;
/**
 * Description of RouteData
 *
 * @author Edgar
 */
class RouteData extends \System\Object
{
    private $_route;
    public function __construct(RouteBase $route = null)
    {
        $this->_route = $route;
    }
    
    public function GetRoute()
    {
        return $this->_route;
    }
    
    public function SetRoute(RouteBase $route)
    {
        $this->_route = $route;
    }
}
?>