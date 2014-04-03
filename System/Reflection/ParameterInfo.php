<?php
namespace System\Reflection;

class ParameterInfo
{
    private $_parameter;
    public function __construct(\ReflectionParameter $parameter)
    {
        $this->_parameter = $parameter;
    }
}
?>