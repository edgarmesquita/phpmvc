<?php
namespace System\Mvc;
/**
 * Description of Dictionary
 *
 * @author Edgar
 */
class SelectList extends MultiSelectList
{
    /**
     * 
     * @param array $items
     * @param array $selectedValues
     */
    function __construct($items = array(), $dataValueField = "", $dataTextField = "", $selectedValue = null)
    {
        parent::__construct($items, $dataValueField, $dataTextField, array($selectedValue));
    }
    
    public function GetSelectedValue()
    {
        $selectedValues = $this->GetSelectedValues();
        return count($selectedValues) > 0 ? $selectedValues[0] : null;
    }
}
?>