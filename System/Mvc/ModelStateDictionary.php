<?php
namespace System\Mvc;
/**
 * Description of ModelStateDictionary
 *
 * @author Edgar
 */
class ModelStateDictionary extends \System\Collections\Dictionary
{
    private $_totalErrors = 0;
    public function Add($key, ModelState $value)
    {
        parent::Add($key, $value);
    }
    
    public function AddModelError($key, $errorMessage)
    {
        if($this->offsetExists($key))
        {
            $this->offsetGet($key)->Errors->Add($errorMessage);
            $this->_totalErrors++;
        }
    }
    
    public function GetValues()
    {
        
    }
    
    public function IsValid()
    {
        return $this->_totalErrors == 0;
    }
}
?>