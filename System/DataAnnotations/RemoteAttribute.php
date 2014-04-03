<?php
namespace System\DataAnnotations;
/**
 * Description of RemoteAttribute
 *
 * @author Edgar
 */
class RemoteAttribute extends ValidationAttribute
{
    private $_additionalFields;
    private $_action;
    private $_controller;
    private $_area;
    
    public function __construct($action, $controller=null, $area=null, $errorMessage="")
    {
        $this->_action = $action;
        $this->_controller = $controller;
        $this->_area = $area;
        
        parent::__construct($errorMessage);
    }
    
    public function GetAdditionalFields()
    {
        return $this->_additionalFields;
    }
    
    public function SetAdditionalFields($value)
    {
        $this->_additionalFields = $value;
    }

    public function IsValid($value)
    {
        
    }
    
    /**
     * 
     * @param ModelMetadata $metadata
     * @param ControllerContext $context
     * @return array of ModelClientValidationRule
     */
    public function GetClientValidationRules(\System\Mvc\ModelMetadata $metadata, \System\Mvc\ControllerContext $context)
    {
        $arr = explode('/', $_SERVER['PHP_SELF']);
        $file = array_pop($arr);
        $root = implode("/", $arr);
        
        $url = "";
        if(isset($this->_area) && !empty($this->_area))
            $url .= "/".$this->_area;

        if(isset($this->_controller) && !empty($this->_controller))
            $url .= "/".$this->_controller;

        $url .= "/".$this->_action;
        
        $rule = new \System\Mvc\ModelClientValidationRule();
        $rule->ErrorMessage = $this->ErrorMessage;
        $rule->ValidationType = "remote";
        
        $rule->ValidationParameters->Add("additionalfields", "*.".$metadata->PropertyName);
        $rule->ValidationParameters->Add("url", $root . $url);
        
        return array($rule);
    }
}
?>