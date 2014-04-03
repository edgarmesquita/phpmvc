<?php
namespace System\Security;
/**
 * Description of Identity
 *
 * @author Edgar
 */
class Identity extends \System\Object
{
    private $_isAuthenticated = false;
    private $_name;
    
    public function GetIsAuthenticated()
    {
        return $this->_isAuthenticated;
    }
    
    public function SetIsAuthenticated($value)
    {
        $this->_isAuthenticated = $value;
    }
    
    public function GetName()
    {
        return $this->_name;
    }
    
    public function SetName($value)
    {
        $this->_name = $value;
    }
}
?>
