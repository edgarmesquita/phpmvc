<?php
namespace System\Mvc;

use System\Security\Authentication;

/**
 * Description of Controller
 *
 * @author Edgar
 */
class Controller extends ControllerBase
{

    private $smarty;

    /**
     *
     * @var IPrincipal
     */
    private $_user;

    /**
     *
     * @var UrlHelper
     */
    private $_url;

    /**
     *
     * @var ModelStateDictionary 
     */
    private $_modelState;

    public function __construct()
    {
        parent::__construct();
        $this->smarty = new \Smarty();

        $area = MVC_ROOT_PATH . 'Views';
        if (isset($_REQUEST['area']) && !empty($_REQUEST['area']))
            $area = MVC_ROOT_PATH . 'Areas/' . ucfirst ( $_REQUEST['area'] ) . '/Views';

        $this->smarty->setTemplateDir($area);
        $this->smarty->setCompileDir(MVC_SYSTEM_PATH .'Runtime/Compile');
        $this->smarty->setConfigDir(MVC_SYSTEM_PATH .'Runtime/Configs');
        $this->smarty->setCacheDir(MVC_SYSTEM_PATH .'Runtime/Cache');

        $this->_url = new UrlHelper();

        $this->_user = new \System\Security\Principal();
        $this->_user->Identity = new \System\Security\Identity();
        if (Authentication::IsAuthenticated())
        {
            $this->_user->Identity->IsAuthenticated = true;
            $this->_user->Identity->Name = Authentication::CurrentUserName();
        }

        $this->_modelState = new ModelStateDictionary();
    }

    public function &__get($name)
    {
        $method = "Get" . $name;

        if (method_exists($this, $method))
            return $this->$method();

        return null;
    }

    /**
     * 
     * @return \IPrincipal
     */
    public function &GetUser()
    {
        return $this->_user;
    }

    /**
     * 
     * @return \UrlHelper
     */
    public function &GetUrl()
    {
        return $this->_url;
    }

    /**
     * 
     * @return \ModelStateDictionary
     */
    public function &GetModelState()
    {
        return $this->_modelState;
    }

    /**
     * @return \System\Web\HttpContextBase
     */
    public function &GetHttpContext()
    {
        
    }
    public function OnActionExecuting(ActionExecutingContext $filterContext)
    {
        
    }

    public function OnActionExecuted(ActionExecutedContext $filterContext)
    {
        
    }

    public function IsPostBack()
    {
        return ($_SERVER['REQUEST_METHOD'] === 'POST');
    }

    /**
     * 
     * @param string $url
     */
    public function Redirect($url)
    {
        $url = $this->GetUrl()->Content($url);
        header("Location: $url");
    }

    /**
     * 
     * @param string $action
     * @param string $controller
     * @param array $routes
     */
    public function RedirectToAction($action, $controller = null, $routes = null)
    {
        if(!isset($routes)) $routes = array();
        
        
        $redirectToActionResult = new RedirectToRouteResult("", array_merge($routes, array(
            "action" => $action,
            "controller" => $controller,
        )));
        
        return $redirectToActionResult;
    }

    /**
     * 
     * @param string $routeName
     * @param array $routeValues
     */
    public function RedirectToRoute($routeName, $routeValues)
    {
        $redirectToRouteResult = new RedirectToRouteResult($routeName, $routeValues);
        return $redirectToRouteResult;
    }

    /**
     * 
     * @param string $template
     * @param object $model
     * @return \System\Mvc\ViewResult
     */
    public function View($template, $model = null)
    {
        $viewResult = new ViewResult();
        $viewResult->ViewName = empty($template) ? $_REQUEST['page'] : $template;

        if (empty($template))
            $template = $_REQUEST['page'];

        $this->GetViewData()->SetModel($model);
        $viewContext = new ViewContext($this->ControllerContext);
        $viewContext->ViewData = $this->GetViewData();
        
        $this->smarty->assignByRef('Model', $model);
        $this->smarty->assignByRef('User', $this->_user);
        $this->smarty->assignByRef('ViewData', $this->GetViewData());
        $this->smarty->assignByRef('Url', $this->_url);
        $this->smarty->assignByRef('Html', new HtmlHelper($viewContext));

        //try
        //{
            $tpl = ucfirst( $_REQUEST['controller'] ) ."/$template.tpl";
            return $this->smarty->fetch($tpl);
        //}
        //catch (Exception $e)
        //{
        //    $this->smarty->display('shared/error.tpl');
        //}
    }

    /**
     * 
     * @param object $obj
     * @return \System\Mvc\JsonResult
     */
    public function Json($obj)
    {
        $jsonResult = new JsonResult();
        $jsonResult->Data = $obj;

        return $jsonResult;
    }

}

?>