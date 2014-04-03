<?php
namespace System\Reflection;
/**
 * Description of PropertyInfo
 *
 * @author Edgar
 */
class MethodInfo
{
    /**
     *
     * @var \ReflectionMethod
     */
    private $_method;
    public function __construct(\ReflectionMethod $method)
    {
        $this->_method = $method;
    }
    
    public function GetParameters()
    {
        $parameterInfos = array();
        $parameters = $this->_method->getParameters();
        
        foreach ($parameters as $parameter)
        {
            array_push($parameterInfos, new ParameterInfo($parameter));
        }
        return $parameterInfos;
    }
    
    public function GetName()
    {
        return $this->_method->getName();
    }
}
?>