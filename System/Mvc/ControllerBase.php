<?php
namespace System\Mvc;
/**
 * Description of ControllerBase
 *
 * @author Edgar
 */
class ControllerBase extends \System\Object
{
    /**
     *
     * @var ViewDataDictionary
     */
    private $_viewData;
    
    private $_controllerContext;
    /**
     * 
     * @return ViewDataDictionary
     */
    public function &GetViewData()
    {
        return $this->_viewData;
    }
    
    public function SetViewData($value)
    {
        $this->_viewData = $value;
    }
    
    public function &GetControllerContext()
    {
        return $this->_controllerContext;
    }
    
    public function SetControllerContext(ControllerContext $controllerContext)
    {
        $this->_controllerContext = $controllerContext;
    }
    
    protected function __construct()
    {
        $this->_viewData = new ViewDataDictionary();
    }
}
?>