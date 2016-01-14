<?php
namespace System\Mvc;

/**
 * Description of SmartyView
 *
 * @author edgar
 */
class SmartyView extends IView
{
    private $smarty;
    private $_viewPath;
    public function __construct(ControllerContext $controllerContext,  $viewPath, $layoutPath)
    {
        $this->smarty = new \Smarty();
        //$this->smarty->setTemplateDir($area);
        $this->smarty->setCompileDir('System/Runtime/Compile');
        $this->smarty->setConfigDir('System/Runtime/Configs');
        $this->smarty->setCacheDir('System/Runtime/Cache');
        
        $this->_viewPath = $viewPath;
    }
    public function Render(ViewContext $viewContext)
    {
        $webPageClassName = "{$this->ViewName}_WebPage";
        eval("class {$webPageClassName} extends WebPageRenderingBase { }");

        $webPage = new $webPageClassName();
        
        $this->smarty->assign('Html', new HtmlHelper($viewContext->GetViewData()->GetModel()));
        try
        {
            $this->smarty->display($this->_viewPath);
        }
        catch (\Exception $e) {
            
            $this->smarty->display('Shared/error.tpl');
        }
    }
}