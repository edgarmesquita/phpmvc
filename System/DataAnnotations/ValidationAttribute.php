<?php
namespace System\DataAnnotations;
/**
 * Description of ValidationAttribute
 *
 * @author Edgar
 */
abstract class ValidationAttribute extends \System\Attribute
{
    private $_errorMessage;
    public function __construct($errorMessage)
    {
        $this->_errorMessage = $errorMessage;
    }
    
    public function GetErrorMessage()
    {
        return $this->_errorMessage;
    }
    
    public function SetErrorMessage($value)
    {
        $this->_errorMessage = $value;
    }
    
    public abstract function IsValid($value);
    
    public function Validate($value, $name)
    {
        
    }
}
?>