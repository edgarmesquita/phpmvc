<?php
namespace System\DataAnnotations;
/**
 * Description of RequiredAttribute
 *
 * @author Edgar
 */
class RequiredAttribute extends ValidationAttribute
{
    /**
     *
     * @var bool
     * @access private
     */
    private $_allowEmptyStrings;
    
    /**
     * 
     * @param string $errorMessage
     * @param bool $allowEmptyStrings
     */
    public function __construct($errorMessage, $allowEmptyStrings=false)
    {
        parent::__construct($errorMessage);
    }

    public function IsValid($value)
    {
        return true;
    }
    
    /**
     * 
     * @return bool
     */
    public function GetAllowEmptyStrings()
    {
        return $this->_allowEmptyStrings;
    }

    /**
     * 
     * @param bool $value
     */
    public function SetAllowEmptyStrings($value)
    {
        $this->_allowEmptyStrings = $value;
    }
}

?>