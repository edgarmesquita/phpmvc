<?php
namespace System\Mvc;
/**
 * Description of ModelClientValidationRule
 *
 * @author Edgar
 */
class ModelClientValidationRule extends \System\Object
{
    private $_errorMessage;
    
    /**
     *
     * @var Dictionary
     */
    private $_validationParameters;
    
    private $_validationType;
    
    public function __construct()
    {
        $this->_validationParameters = new \System\Collections\Dictionary();
    }
    
    /**
     * 
     * @return string
     */
    public function GetErrorMessage()
    {
        return $this->_errorMessage;
    }
    
    /**
     * 
     * @param string $value
     */
    public function SetErrorMessage($value)
    {
        $this->_errorMessage = $value;
    }
    
    /**
     * 
     * @return Dictionary
     */
    public function GetValidationParameters()
    {
        return $this->_validationParameters;
    }
    
    /**
     * 
     * @return string
     */
    public function GetValidationType()
    {
        return $this->_validationType;
    }
    
    /**
     * 
     * @param string $value
     */
    public function SetValidationType($value)
    {
        $this->_validationType = $value;
    }
}
?>