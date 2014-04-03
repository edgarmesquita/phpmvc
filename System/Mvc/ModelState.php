<?php
namespace System\Mvc;
/**
 * Description of ModelState
 *
 * @author Edgar
 */
class ModelState extends \System\Object
{
    private $_value;
    
    /**
     *
     * @var ModelErrorCollection
     */
    private $_errors;
    
    public function __construct()
    {
        $this->_errors = new ModelErrorCollection();
    }
    public function GetValue()
    {
        return $this->_value;
    }
    
    public function SetValue($value)
    {
        $this->_value = $value;
    }
    
    /**
     * 
     * @return ModelErrorCollection
     */
    public function GetErrors()
    {
        return $this->_errors;
    }
}
?>