<?php
namespace System\Mvc;

/**
 * Description of Dictionary
 *
 * @author Edgar
 */
class MultiSelectList extends \ArrayObject
{

    private $_dataValueField;
    private $_dataTextField;
    private $_selectedValues;

    /**
     * 
     * @param array $items
     * @param array $selectedValues
     */
    function __construct($items = array(), $dataValueField = "", $dataTextField = "", $selectedValues = array())
    {
        $this->_dataTextField = $dataTextField;
        $this->_dataValueField = $dataValueField;
        $this->_selectedValues = $selectedValues;
        $selectedItems = array();
        foreach ($items as $index => $obj)
        {
            $item = new SelectListItem();
            if (isset($this->_dataTextField) && !empty($this->_dataTextField) && isset($this->_dataValueField) && !empty($this->_dataValueField))
            {
                if($obj instanceof SelectListItem)
                {
                    foreach ($this->_selectedValues as $selectedValue)
                        if ($obj->GetValue() == $selectedValue)
                            $item->SetSelected(true);

                    $item->SetValue($obj->GetValue());
                    $item->SetText($obj->GetText());
                }
                else
                {
                    foreach ($this->_selectedValues as $selectedValue)
                        if ($obj->{$this->_dataValueField} == $selectedValue)
                            $item->SetSelected(true);

                    $item->SetValue($obj->{$this->_dataValueField});
                    $item->SetText($obj->{$this->_dataTextField});
                }
            }
            else
            {
                $value = null;
                if($obj instanceof SelectListItem)
                    $value = $obj->GetValue();
                else $value = (string) $obj;
                
                if(count($this->_selectedValues) > 0)
                    foreach ($this->_selectedValues as $selectedValue)
                        if ($value == $selectedValue) $item->SetSelected(true);
                    
                $item->SetValue($value);
                $item->SetText($value);
            }
            array_push($selectedItems, $item);
        }
        parent::__construct($selectedItems);        
    }

    public function GetDataTextField()
    {
        return $this->_dataTextField;
    }

    public function GetDataValueField()
    {
        return $this->_dataValueField;
    }

    public function GetSelectedValues()
    {
        return $this->_selectedValues;
    }
}
?>
