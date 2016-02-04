<?php
namespace System\Mvc;
/**
 * Description of UrlHelper
 *
 * @author Edgar
 */
class UrlHelper
{
    private $root;
    
    public function __construct()
    {
        $arr = explode('/', $_SERVER['PHP_SELF']);
        $file = array_pop($arr);
        $this->root = implode("/", $arr);
    }
    /**
     * Generates a fully qualified URL to an action method by using the specified
     * action name, controller name and routes values.
     * @param string $actionName
     * @param string $controllerName
     * @param array $routeValues
     * @return string The fully qualified URL to an action method.
     */
    public function Action($actionName, $controllerName = "", $routeValues = array())
    {
        $url = "";
        
        if(!empty($controllerName)) $url .= "/$controllerName";
        else $url .= "/{$_REQUEST['controller']}";
        
        $url .= "/$actionName";
        
        if(isset($routeValues) && is_array($routeValues))
        {
            $area = false;
            $i = 0;
            foreach ($routeValues as $key => $value)
            {
                if(is_int($key) && is_array($value))
                {
                    $k = $value[0];
                    $v = $value[1];
                }
                else
                {
                    $k = $key;
                    $v = $value;
                }
                
                if($k == "area")
                {
                    $area = true;
                    $url = "/$v{$url}";
                }
                else
                {
                    if($i == 0) $url .= "?";
                    else $url .= "&";

                    $url .= "$k=$v";
                    $i++;
                }
            }
        }
        if(!$area && isset($_REQUEST["area"]))
            $url = "/{$_REQUEST["area"]}{$url}";
        
        if(MVC_FRIENDLY_URL) return $this->root . $url;
        else return $this->root . "/index.php?r=". trim($url, "/");
    }
    /**
     * Converts a virtual (relative) path to an application absolute path.
     * @param string $contentPath
     * @return string
     */
    public function Content($contentPath)
    {
        
        return str_replace("~", $this->root, $contentPath);
    }
    /**
     * 
     * @param string $url
     * @return string
     */
    public function Encode($url)
    {
        
    }
    
    /**
     * 
     * @param string $url
     * @return boolean
     */
    public function IsLocalUrl($url)
    {
        return false;
    }
}

?>
