<?php
namespace System\Mvc;

/**
 * Description of ViewContext
 *
 * @author Edgar
 */
class ViewContext extends ControllerContext
{
    private $_viewData;
    public function __construct(ControllerContext $controllerContext)
    {
        parent::__construct($controllerContext->RequestContext, $controllerContext->Controller);
    }
    
    /**
     * 
     * @return ViewDataDictionary
     */
    public function GetViewData()
    {
        return $this->_viewData;
    }
    public function SetViewData($viewData)
    {
        $this->_viewData = $viewData;
    }
}
?>