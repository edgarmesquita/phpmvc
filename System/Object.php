<?php
namespace System;
/**
 * @author Edgar
 */
class Object
{
    public static function __getStatic($name)
    {
        $method = "Get".$name;
        if(method_exists(__CLASS__, $method))
            return self::$method();
        
        return null;
    }
    public function __get($name)
    {
        $method = "Get".$name;
        
        if(method_exists($this, $method))
            return $this->$method();
        
        return null;
    }
    
    public function __set($name, $value)
    {
        $method = "Set".$name;
        if(method_exists($this, $method))
            $this->$method($value);
        else
            throw new Exception("This property can not be setted");
    }
    
    public function GetType()
    {
        return new Type($this);
    }
}
?>