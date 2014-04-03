<?php
namespace System\Mvc;
/**
 * Description of ViewDataDictionary
 *
 * @author Edgar
 */
class ViewDataDictionary extends \ArrayObject
{
    private $_model;
    
    function __construct($model = null)
    {
        parent::__construct(array());
        
        $this->_model = $model;
    }

    public function Add($key, $value)
    {
        $this->offsetSet($key, $value);
    }

    public function Remove($key)
    {
        $this->offsetUnset($key);
    }
    
    public function &GetModel()
    {
        return $this->_model;
    }

    public function SetModel($model)
    {
        $this->_model = $model;
    }
}

?>