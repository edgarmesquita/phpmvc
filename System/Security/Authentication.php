<?php
namespace System\Security;

/**
 * Description of FormsAuthentication
 *
 * @author Edgar
 */
class Authentication
{
    public static function CurrentUserName()
    {
        $data = self::GetData();
        if($data != null) return $data["name"];
        return "";
    }

    /**
     * 
     * @param string $userName
     * @param string $password
     * @param bool $persistCookie
     * @return bool Description
     */
    public static function Login($userName, $password, $persistCookie = false)
    {
        $expire = self::GetExpire();
        $data = serialize(array(
            "name" => $userName,
            "password" => $password
        ));
        $data = gzcompress($data);
        $data = base64_encode($data);
        setcookie("_MVCAUTH", $data, time() + $expire, "/");
        
        return true;
    }

    public static function Logout()
    {
        setcookie("_MVCAUTH", "", time() - 3600, "/");
        unset($_COOKIE["_MVCAUTH"]);
    }

    public static function LoginUrl()
    {
        $url = "~/account/login";
        $authentication = \System\Configuration\ConfigurationManager::GetSection("authentication");
        if ($authentication != null && $authentication["loginUrl"] != null)
        {
            $url = (string) $authentication["loginUrl"];
        }
        return $url;
    }
    
    public static function IsAuthenticated()
    {
        return isset($_COOKIE["_MVCAUTH"]) && !empty($_COOKIE["_MVCAUTH"]);
    }
    
    private static function GetExpire()
    {
        $expire = 3600;
        $authentication = \System\Configuration\ConfigurationManager::GetSection("authentication");
        if ($authentication != null && $authentication["timeout"] != null)
        {
            $expire = (int) ((string) $authentication["timeout"] );
        }
        return $expire;
    }
    public static function Renew()
    {
        if(self::IsAuthenticated())
        {
            $expire = self::GetExpire();
            setcookie("_MVCAUTH", $_COOKIE["_MVCAUTH"], time() + $expire, "/");
        }
    }
    private static function GetData()
    {
        if(self::IsAuthenticated())
        {
            $data = $_COOKIE["_MVCAUTH"];
            $data = base64_decode($data);
            $data = gzuncompress($data);

            return unserialize($data);
        }
        return null;
    }

}

?>