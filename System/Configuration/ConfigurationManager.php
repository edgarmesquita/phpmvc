<?php
namespace System\Configuration;
/**
 * Description of ConfigurationManager
 *
 * @author Edgar
 */
class ConfigurationManager
{
    private static $_config = null;
    private static function GetConfig()
    {
        if(!isset(self::$_config))
            self::$_config = simplexml_load_file(MVC_ROOT_PATH . "config.xml");
        return self::$_config;
    }
    
    public static function GetSection($sectionName)
    {
        $config = self::GetConfig();
        return $config->$sectionName;
    }
    public static function AppSettings()
    {
        $appSettings = array();
        $config = self::GetConfig();
        foreach($config->appSettings->add as $appSetting)
        {
            $appSettings[(string)$appSetting["key"]] = (string)$appSetting["value"];
        }
        
        return $appSettings;
    }
    
    public static function ConnectionStrings()
    {
        $connectionStrings = array();
        $config = self::GetConfig();
        foreach($config->connectionStrings->add as $connectionString)
        {
            $connectionStrings[(string)$connectionString["name"]] = (string)$connectionString["connectionString"];
        }
        return $connectionStrings;
    }
}
?>