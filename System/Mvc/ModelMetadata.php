<?php
namespace System\Mvc;
/**
 * Description of ModelMetadata
 *
 * @author Edgar
 */
class ModelMetadata extends \System\Object
{
    private $_propertyName;
    public function __construct($propertyName)
    {
        $this->_propertyName = $propertyName;
    }
    /**
     * 
     * @param string $expression
     * @param ViewDataDictionary $viewData
     * @return \ModelMetadata
     */
    public static function FromStringExpression($expression, ViewDataDictionary $viewData)
    {
        $modelMetadata = new ModelMetadata();
        
        return $modelMetadata;
    }
    
    public function GetPropertyName()
    {
        return $this->_propertyName;
    }
}

?>
