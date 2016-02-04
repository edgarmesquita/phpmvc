<?php
namespace System\Mvc;
/**
 * Description of EmptyResult
 *
 * @author Edgar
 */
class SelectListItem extends \System\Object
{
    private $_selected = false;
    private $_text;
    private $_value;
    
    
    public function GetSelected()
    {
        return $this->_selected;
    }
    
    public function SetSelected($value)
    {
        $this->_selected = $value;
    }
    
    public function GetText()
    {
        return $this->_text;
    }
    
    public function SetText($value)
    {
        $this->_text = $value;
    }
    
    public function GetValue()
    {
        return $this->_value;
    }
    
    public function SetValue($value)
    {
        $this->_value = $value;
    }
    
    public function __construct($value = null, $text = null)
    {
        $this->_value = $value;
        $this->_text = $text;
    }
}