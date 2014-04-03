<?php
namespace System\Mvc;

/**
 * Description of AreaRegistration
 *
 * @author Edgar
 */
abstract class AreaRegistration extends \System\Object
{
    public static function RegisterAllAreas()
    {
        $applicationConfig = \System\Configuration\ConfigurationManager::GetSection("application");
        $namespace = (string)$applicationConfig["namespace"];
        $areas = array();
        $areasFolder = MVC_ROOT_PATH . 'Areas' . DIRECTORY_SEPARATOR;
        foreach(glob($areasFolder . '*', GLOB_ONLYDIR) as $dir) {
            $dirname = str_replace($areasFolder, "", $dir);
            
            $areaRegistrationClass = $namespace . "\\Areas\\" .ucfirst($dirname)."\\". ucfirst($dirname) . "AreaRegistration";
            $areaRegistration = new $areaRegistrationClass();
            $areaRegistration->RegisterArea(new AreaRegistrationContext($areaRegistration->AreaName));
            
            array_push($areas, $areaRegistration);
        }
    }
    public abstract function RegisterArea(AreaRegistrationContext $context);
    public abstract function GetAreaName();
}
?>