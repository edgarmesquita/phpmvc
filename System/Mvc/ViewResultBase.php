<?php
namespace System\Mvc;
/**
 * Description of ViewResultBase
 *
 * @author Edgar
 */
abstract class ViewResultBase extends ActionResult
{
    private $smarty;
    
    /**
     *
     * @var object
     */
    private $model;
    
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
     * Gets the view data model.
     * @return object The view data model.
     */
    public function GetModel()
    {
        return $this->model;
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
    
    public function ExecuteResult(ControllerContext $context)
    {
        $this->smarty->assign('Html', new HtmlHelper($this->model));
        try
        {
            $tpl = ucfirst( $_REQUEST['controller'] ) ."/{$this->ViewName}.tpl";
            $this->smarty->display($tpl);
        }
        catch (\Exception $e) {
            
            $this->smarty->display('Shared/error.tpl');
        }
    }
    
    public abstract function FindView(ControllerContext $context);
    
    protected function __construct()
    {
        parent::__construct();
        
        $this->smarty = new \Smarty();
        //$this->smarty->setTemplateDir($area);
        $this->smarty->setCompileDir('System/Runtime/Compile');
        $this->smarty->setConfigDir('System/Runtime/Configs');
        $this->smarty->setCacheDir('System/Runtime/Cache');
        
        $this->_viewData = new ViewDataDictionary();
    }
}
?>