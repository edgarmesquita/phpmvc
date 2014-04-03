<?php
namespace System;

/**
 * Description of Type
 *
 * @author Edgar
 */
class Type
{

    /**
     *
     * @var ReflectionClass
     */
    private $_reflection;

    public function __construct($obj)
    {
        $this->_reflection = new \ReflectionClass($obj);
    }

    public function GetProperty($name)
    {
        $property = $this->_reflection->getProperty($name);
        $propertyInfo = new Reflection\PropertyInfo($property);

        return $propertyInfo;
    }

    public function GetProperties()
    {
        $propertyInfos = array();
        $properties = $this->_reflection->getProperties();

        foreach ($properties as $property)
        {
            array_push($propertyInfos, new Reflection\PropertyInfo($property));
        }

        return $propertyInfos;
    }

    /**
     * An object that represents the public method with the specified name, if found; otherwise, null.
     * @param string $name
     * @return \System\Reflection\MethodInfo
     */
    public function GetMethod($name)
    {
        try
        {
            $method = $this->_reflection->getMethod($name);
            if (isset($method))
            {
                $methodInfo = new Reflection\MethodInfo($method);

                return $methodInfo;
            }
        }
        catch (\ReflectionException $ex)
        {
            
        }
        return null;
    }
}
?>