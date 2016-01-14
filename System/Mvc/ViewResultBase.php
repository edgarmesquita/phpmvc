<?php
namespace System\Mvc;

use System\Web\WebPageRenderingBase;

/**
 * Description of ViewResultBase
 *
 * @author Edgar
 */
abstract class ViewResultBase extends ActionResult
{    
    /**
     *
     * @var string
     */
    private $viewName;
    
    /**
     *
     * @var ViewDataDictionary
     */
    private $_viewData;
    
    /**
     *
     * @var IView
     */
    private $_view;
    
    /**
     * Gets the view data model.
     * @return object The view data model.
     */
    public function GetModel()
    {
        return $this->_viewData->GetModel();
    }
    
    /**
     * Gets the name of the view to render.
     * @return string
     */
    public function GetViewName()
    {
        return $this->viewName;
    }
    
    /**
     * Sets the name of the view to render.
     * @param string $value
     */
    public function SetViewName($value)
    {
        $this->viewName = $value;
    }
    
    /**
     * 
     * @return ViewDataDictionary
     */
    public function &GetViewData()
    {
        return $this->_viewData;
    }
    
    /**
     * @return IView
     */
    public function GetView()
    {
        return $this->_view;
    }
    
    public function ExecuteResult(ControllerContext $context)
    {       
        $tpl = ucfirst( $_REQUEST['controller'] ) ."/{$this->ViewName}.tpl";
        $this->_view = new SmartyView($context, $tpl, null);
        $this->_view->Render(new ViewContext($context, $this->_viewData));
    }
    
    public abstract function FindView(ControllerContext $context);
    
    protected function __construct()
    {
        parent::__construct();
        $this->_viewData = new ViewDataDictionary();
        
    }
}
?>