<?php

namespace System;

/**
 * 
 * @param string $className
 * @return \System\Type
 */
function typeof($className)
{
    return new Type($className);
}

/**
 * Description of Application
 *
 * @author Edgar Mesquita
 * @version 1.0
 */
class Application
{

    /**
     *
     * @var Array
     */
    public static $_namespaces = array();

    /**
     *
     * @var \SimpleXMLElement
     */
    private $_config;
    private $_actionName;
    private $_namespace;

    /**
     *
     * @var Mvc\ControllerContext
     */
    private $_controllerContext;

    public function __construct()
    {
        if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300)
            die('PHP MVC Framework requires PHP 5.3 or higher');
        
        define("MVC_SYSTEM_PATH", dirname(__FILE__) . DIRECTORY_SEPARATOR);
        define("MVC_ROOT_PATH", dirname($_SERVER["SCRIPT_FILENAME"]) . DIRECTORY_SEPARATOR);

        if (!defined('MVC_FRIENDLY_URL'))
            define("MVC_FRIENDLY_URL", true);

        require_once MVC_SYSTEM_PATH . 'Vendor/smarty/Smarty.class.php';
        require_once MVC_SYSTEM_PATH . 'Vendor/phpmailer/class.phpmailer.php';
        require_once MVC_SYSTEM_PATH . 'Vendor/php-activerecord/ActiveRecord.php';

        date_default_timezone_set('America/Sao_Paulo');

        $this->_config = simplexml_load_file(MVC_ROOT_PATH . "config.xml");
        $this->_namespace = $namespace = (string) $this->_config->application["namespace"];

        spl_autoload_register(function($class) use($namespace)
        {
            if (substr($class, 0, strlen($namespace)) == $namespace)
            {
                $path = str_replace($namespace . "\\", "", $class);
                @include_once MVC_ROOT_PATH . str_replace("\\", DIRECTORY_SEPARATOR, $path) . ".php";
            }
            if (substr($class, 0, 6) == "System")
            {
                $path = str_replace("System\\", "", $class);
                @include_once MVC_SYSTEM_PATH . str_replace("\\", DIRECTORY_SEPARATOR, $path) . ".php";
            }
            spl_autoload_extensions(".php,.class.php,.inc.php");
            spl_autoload($class);
        });
    }

    private function ParseRequest(\ReflectionClass $reflector, $requestPrefix)
    {
        $properties = $reflector->getProperties();
        $obj = $reflector->newInstance();

        //$property = new ReflectionProperty();
        foreach ($properties as $property)
        {
            $ok = false;
            if (preg_match('/@var\s+([^\s]+)/', $property->getDocComment(), $matches))
            {
                $pClass = $matches[1];
                if (class_exists($pClass))
                {
                    $ok = true;
                    $r = new \ReflectionClass($pClass);
                    $property->setValue($obj, $this->ParseRequest($r, "{$property->getName()}."));
                }
            }
            if (!$ok)
            {
                $key = $requestPrefix . $property->name;

                if (isset($_REQUEST[$key]))
                {
                    $modelState = new Mvc\ModelState();
                    $this->_controllerContext->Controller->GetModelState()->Add($key, $modelState);
                    $property->setValue($obj, $_REQUEST[$key]);
                }
            }
        }
        return $obj;
    }

    private function GetActionArgs($controllerClassName, $methodName)
    {
        $args = new Collections\Dictionary();
        try
        {

            $reflector = new \ReflectionClass($controllerClassName);
            $parameters = $reflector->getMethod($methodName)->getParameters();

            foreach ($parameters as $parameter)
            {
                $pClass = $parameter->getClass();
                if ($pClass != null)
                    $args->Add($parameter->getName(), $this->ParseRequest($pClass, ""));
                else
                    $args->Add($parameter->getName(), isset($_REQUEST[$parameter->name]) ? $_REQUEST[$parameter->name] : null);
            }
        } catch (\ReflectionException $ex)
        {
            
        }
        return $args;
    }

    public function Start()
    {

        session_save_path(MVC_SYSTEM_PATH . 'Runtime');
        ini_set('session.gc_probability', 1);
        session_start();

        Security\Authentication::Renew();

        $ok = false;
        $globalClass = (string) $this->_config->application["inherits"];
        $controllerClass = "";

        try
        {
            if (!empty($globalClass))
            {
                $global = new $globalClass();
                $global->Start();
            }
        } catch (\Exception $ex)
        {
            $this->RenderExceptionError($ex);
        }
        $r = !empty($_REQUEST['r']) ? explode('/', $_REQUEST['r']) : array();

        $routes = Routing\RouteTable::GetRoutes()->GetEnumerator();
        $route = new Routing\Route();
        foreach ($routes as $name => $route)
        {
            $url = $route->Url;
            $defaults = $route->Defaults;
            $constraints = $route->Constraints;
            $params = array();
            $p = explode('/', $url);
            $i = 0;
            foreach ($p as $m)
            {
                preg_match("'\{(.*?)\}'si", $m, $matches);

                //É uma variável
                if (count($matches) > 1)
                {
                    $key = $matches[1];

                    //encontrou na url
                    if (isset($r[$i]) && !empty($r[$i]))
                    {
                        $params[$key] = $r[$i];
                    }
                    //encontrou nos valores padr�es
                    elseif (array_key_exists($key, $defaults))
                    {
                        $params[$key] = $defaults[$key];
                    } else
                    {
                        break;
                    }
                }
                //É um texto
                elseif (empty($r[$i]) || $m != $r[$i])
                {
                    break;
                }
                $i++;
            }
            //econtrou todos os paramentros
            if (count($p) == $i)
            {
                if (array_key_exists('area', $constraints))
                    $params['area'] = $constraints['area'];
                foreach ($defaults as $key => $default)
                {
                    if (!isset($params[$key]) || empty($params[$key]))
                        $params[$key] = $default;
                }

                $this->_actionName = ucfirst($params['action']);
                $controllerClass = $this->_namespace . "\\Controllers\\" . ucfirst($params['controller']) . "Controller";

                if (isset($params['area']) && !empty($params['area']))
                {
                    $controllerClass = $this->_namespace . "\\Areas\\" . ucfirst($params['area']) . "\\Controllers\\" . ucfirst($params['controller']) . "Controller";
                }


                foreach ($params as $key => $param)
                {
                    if (!($param instanceof Mvc\OptionalUrlParameter))
                        $_REQUEST[$key] = $param;
                }
                $ok = true;
                break;
            }
        }
        //print_r($controllerClass); exit;
        if ($ok)
        {
            $requestContext = new Routing\RequestContext(new Web\HttpContext(), new Routing\RouteData($route));
            try
            {

                $this->_controllerContext = new Mvc\ControllerContext($requestContext, new $controllerClass());
                $controller = $this->_controllerContext->Controller;
                $reflectedController = new Mvc\ReflectedControllerDescriptor(typeof($controllerClass));
                $actionDescriptor = $reflectedController->FindAction($this->_controllerContext, $this->_actionName);

                if (method_exists($this->_controllerContext->Controller, $this->_actionName))
                {
                    $args = $this->GetActionArgs($controllerClass, $this->_actionName);
                    $actionExecutingContext = new Mvc\ActionExecutingContext($this->_controllerContext, $actionDescriptor, $args);
                    $this->_controllerContext->Controller->OnActionExecuting($actionExecutingContext);

                    $resultEx = null;
                    $actionResult = null;
                    try
                    {
                        $actionResult = call_user_func_array(array($controller, $this->_actionName), array_values($args->getArrayCopy()));
                    } catch (\Exception $ex)
                    {
                        $resultEx = $ex;
                    }
                    //print_r($resultEx) ; exit();

                    $actionExecutedContext = new Mvc\ActionExecutedContext($this->_controllerContext, $actionDescriptor, false, $resultEx);
                    $actionExecutedContext->Result = $actionResult;

                    $this->_controllerContext->Controller->OnActionExecuted($actionExecutedContext);

                    if ($actionResult != null)
                    {
                        if ($actionResult instanceof Mvc\ActionResult)
                            $actionResult->ExecuteResult($this->_controllerContext);
                        else
                            echo $actionResult;
                    }
                    else if (isset($resultEx))
                        $this->RenderExceptionError($resultEx);
                }
                else
                {
                    $this->RenderErrorPage();
                }
            } catch (\Exception $ex)
            {
                $this->RenderExceptionError($ex);
            }
        } else
        {
            $this->RenderErrorPage();
        }
    }

    private function RenderExceptionError(\Exception $ex)
    {
        header("HTTP/1.0 500 Internal Error");

        $smarty = new \Smarty();
        $smarty->setTemplateDir(MVC_SYSTEM_PATH . 'Views');
        $smarty->setCompileDir(MVC_SYSTEM_PATH . 'Runtime/Compile');
        $smarty->setConfigDir(MVC_SYSTEM_PATH . 'Runtime/Configs');
        $smarty->setCacheDir(MVC_SYSTEM_PATH . 'Runtime/Cache');
        $smarty->assign("Exception", $ex);
        $smarty->display('500.tpl');
    }

    private function RenderErrorPage()
    {
        header("HTTP/1.0 404 Not Found");

        $smarty = new \Smarty();
        $smarty->setTemplateDir(MVC_SYSTEM_PATH . 'Views');
        $smarty->setCompileDir(MVC_SYSTEM_PATH . 'Runtime/Compile');
        $smarty->setConfigDir(MVC_SYSTEM_PATH . 'Runtime/Configs');
        $smarty->setCacheDir(MVC_SYSTEM_PATH . 'Runtime/Cache');
        $smarty->display('404.tpl');
    }

    public static function Trace($obj)
    {
        echo "<pre>" . print_r($obj, true) . "</pre>";
    }

}

?>