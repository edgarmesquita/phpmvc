<?php
namespace System\Mvc;
/**
 * Description of AreaRegistrationContext
 *
 * @author Edgar
 */
class AreaRegistrationContext
{
    private $_areaName;
    
    public function GetAreaName()
    {
        return $this->_areaName;
    }
    
    public function __construct($areaName)
    {
        $this->_areaName = $areaName;
    }
    
    /**
     * 
     * @param string $name
     * @param string $url
     * @param array() $defaults
     * @param array() $constraints
     */
    public function MapRoute($name, $url, $defaults = array(), $constraints = array())
    {
        if(!array_key_exists('area', $constraints)) $constraints['area'] = $this->_areaName;
        \System\Routing\RouteTable::GetRoutes()->MapRoute($name, $url, $defaults, $constraints);
    }
    
    /**
     * 
     * @return RouteCollection
     */
    public function GetRoutes()
    {
        return \System\Routing\RouteTable::GetRoutes();
    }
}
?>