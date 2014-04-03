<?php
namespace System\Routing;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RouteCollection
 *
 * @author Edgar
 */
class RouteCollection
{
    private $routes = array();
    
    /**
     * 
     * @param type $name
     * @param type $url
     * @param type $defaults
     * @param type $constraints
     */
    public function MapRoute($name, $url, $defaults=array(), $constraints=array())
    {
        $this->routes[$name] = new Route($url, $defaults, $constraints);
    }
    
    public function GetEnumerator()
    {
        return $this->routes;
    }
}
?>
