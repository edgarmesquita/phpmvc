<?php
namespace System\Routing;
/**
 * Description of Route
 *
 * @author Edgar
 */
class Route extends RouteBase
{
    private $_url;
    private $_defaults;
    private $_constraints;
    
    public function __construct($url=null, $defaults=array(), $constraints=array())
    {
        $this->_url = $url;
        $this->_defaults = $defaults;
        $this->_constraints = $constraints;
        
        if(!array_key_exists('controller', $this->_defaults)) $this->_defaults['controller'] = 'home';
        if(!array_key_exists('action', $this->_defaults)) $this->_defaults['action'] = 'index';
    }
    public function GetConstraints()
    {
        return $this->_constraints;
    }
    public function GetDefaults()
    {
        return $this->_defaults;
    }
    public function GetUrl()
    {
        return $this->_url;
    }
}
?>