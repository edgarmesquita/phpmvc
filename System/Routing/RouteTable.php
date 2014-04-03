<?php
namespace System\Routing;
/**
 * Description of RouteTable
 *
 * @author Edgar
 */
class RouteTable extends \System\Object
{
    private static $routes = null;
    
    /**
     * @return RouteCollection
     */
    public static function GetRoutes()
    {
        if(self::$routes == null)
            self::$routes = new RouteCollection();
        
        return self::$routes;
    }
}
?>