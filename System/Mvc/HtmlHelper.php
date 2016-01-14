<?php
namespace System\Mvc;

/**
 * Representa o suporte para a renderização de controles HTML
 *
 * @author Edgar
 */
class HtmlHelper
{

    private $root;
    private $_model;
    private $_reflector;
    private $_viewContext;
    
    
    /**
     * 
     * @param \System\Mvc\ViewContext $viewContext
     */
    public function __construct(\System\Mvc\ViewContext $viewContext)
    {
        if ($viewContext != null)
        {
            $this->_viewContext = $viewContext;
            $this->_model = $viewContext->ViewData->GetModel();
            
            if($this->_model != null)
            {
                if(!is_array($this->_model))
                    $this->_reflector = new \ReflectionClass($this->_model);
                else $this->_reflector = new \ReflectionClass($this->_model[0]);
            }
        }

        $arr = explode('/', $_SERVER['PHP_SELF']);
        $file = array_pop($arr);
        $this->root = implode("/", $arr);
    }

    public function BeginForm($actionName="", $controllerName="", $routeValues = array(), $method="POST", $htmlAttributes = array())
    {
        $url = new UrlHelper();
        $attributes = array();
        if(isset($actionName) && !empty($actionName)) $attributes["action"] = $url->Action ($actionName, $controllerName, $routeValues);
        if(isset($method) && !empty($method)) $attributes["method"] = $method;
        
        return $this->RenderElement("form", array_merge($attributes, $htmlAttributes), null, true);
    }
    
    public function EndForm()
    {
        return "</form>";
    }
    
    public function Label($name, $text=null)
    {
        $attributes = array("for" => $name);
        if(!isset($text)) $text = $name;
        
        return $this->RenderElement("label", $attributes, $text);
    }
    
    public function LabelFor($property)
    {
        $annotation = $this->GetDataAnnotationAttribute("Display", $property);
        return $this->Label($property, $annotation->Name);
    }
    /**
     * 
     * @param string $name
     * @param object $value
     * @param int $rows
     * @param int $columns
     * @param array $htmlAttributes
     * @return string
     */
    public function TextArea($name, $value = "", $rows = 0, $columns = 0, $htmlAttributes = array())
    {
        $attributes = array("name" => $name);
        if ($rows > 0)
            $attributes['rows'] = $rows;
        if ($columns > 0)
            $attributes['cols'] = $columns;

        if (!isset($value) || empty($value))
            $value = "";
        return $this->RenderElement("textarea", array_merge($attributes, $htmlAttributes), $value);
    }

    /**
     * 
     * @param string $property
     * @param int $rows
     * @param int $columns
     * @param array $htmlAttributes
     * @return string
     */
    public function TextAreaFor($property, $rows = 0, $columns = 0, $htmlAttributes = array())
    {
        return $this->TextArea(
                        $property, $this->_model->$property, $rows, $columns, array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }

    /**
     * 
     * @param string $name
     * @param object $value
     * @param array $htmlAttributes
     * @return string
     */
    public function TextBox($name, $value, $htmlAttributes = array())
    {
        $attributes = array(
            "type" => "text",
            "name" => $name,
            "value" => $value
        );
        return $this->RenderElement("input", array_merge($attributes, $htmlAttributes));
    }

    /**
     * 
     * @param string $property
     * @param array $htmlAttributes
     * @return string
     */
    public function TextBoxFor($property, $format = null, $htmlAttributes = array())
    {
        return $this->TextBox(
            $property, $this->ValueToString($this->_model->$property, $format),
            array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }

    public function Password($name, $value, $htmlAttributes = array())
    {
        $attributes = array(
            "type" => "password",
            "name" => $name,
            "value" => $value
        );
        return $this->RenderElement("input", array_merge($attributes, $htmlAttributes));
    }
    
    public function PasswordFor($property, $htmlAttributes = array())
    {
        return $this->Password(
            $property, $this->_model->$property, array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }
    
    public function Hidden($name, $value, $htmlAttributes = array())
    {
        $attributes = array(
            "type" => "hidden",
            "name" => $name,
            "value" => $value
        );
        return $this->RenderElement("input", array_merge($attributes, $htmlAttributes));
    }
    
    public function HiddenFor($property, $htmlAttributes = array())
    {
        return $this->Hidden(
            $property, $this->_model->$property, array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }
    
    public function RadioButton($name, $value, $isChecked, $htmlAttributes = array())
    {       
        $attributes = array(
            "type" => "radio",
            "name" => $name,
            "value" => $this->ValueToString($value)
        );
        if($isChecked) $attributes["checked"] = "checked";
        
        return $this->RenderElement("input", array_merge($attributes, $htmlAttributes));
    }
    
    public function RadioButtonFor($property, $value, $htmlAttributes = array())
    {
        $isChecked = ($this->_model != null && isset($this->_model->$property) && $this->_model->$property == $value);
        return $this->RadioButton(
            $property, $value, $isChecked, array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }
    
    public function CheckBox($name, $value, $isChecked, $htmlAttributes = array())
    {        
        $attributes = array(
            "type" => "checkbox",
            "name" => $name,
            "value" => $this->ValueToString($value)
        );
        if($isChecked) $attributes["checked"] = "checked";
        
        return $this->RenderElement("input", array_merge($attributes, $htmlAttributes));
    }
    
    public function CheckBoxFor($property, $value, $htmlAttributes = array())
    {
        $isChecked = ($this->_model != null && isset($this->_model->$property) && $this->_model->$property == $value);
        return $this->CheckBox(
            $property, $value, $isChecked, array_merge($htmlAttributes, $this->GetDataAnnotationValidationAttributes($property))
        );
    }
    
    public function DropDownList($name, $selectList, $optionLabel = null, $htmlAttributes = array())
    {
        $attributes = array(
            "name" => $name
        );
        $options = "";
        
        if(isset($optionLabel))
            $options .= $this->RenderElement("option", array("value" => ""), $optionLabel);
        
        $value = null;
        
        if(isset($this->_model))
        {
            $prop = preg_replace("/\[([a-zA-Z]+)\]/", "['$1']", $name);
            eval("\$value = \$this->_model->$prop;");
        }
        
        foreach ($selectList as $item)
        {
            $attrs = array();
            $text = "";

            if (is_array($item))
            {
                $attrs["value"] = $item[0];
                $text = $item[1];
            }
            else if($item instanceof SelectListItem)
            {
                $attrs["value"] = $item->Value;
                $text = $item->Text;
                
                if(isset($value) && $item->Value == $value) $attrs["selected"] = "selected";
                else{
                    if($item->Selected) $attrs["selected"] = "selected";
                }
            }
            
            $options .= $this->RenderElement("option", $attrs, $text);
        }
        return $this->RenderElement("select", array_merge($attributes, $htmlAttributes), $options);
    }

    /**
     * 
     * @param string $name
     * @return string
     */
    public function ValidationMessage($name)
    {
        return $this->RenderElement("spam", array(
                    "class" => "field-validation-valid",
                    "data-valmsg-replace" => "true",
                    "data-valmsg-for" => $name
                ));
    }

    /**
     * 
     * @param string $property
     * @return string
     */
    public function ValidationMessageFor($property)
    {
        return $this->ValidationMessage($property);
    }

    /**
     * 
     * @param string $partialViewName
     * @param object $model
     * @param array $viewData
     */
    public function Partial($partialViewName, $model = null, $viewData = array())
    {
        $smarty = new \Smarty();
        $area = 'Views';
        if (isset($_REQUEST['area']) && !empty($_REQUEST['area']))
            $area = 'Areas/' . ucfirst ( $_REQUEST['area'] ) . '/Views';

        $smarty->setTemplateDir($area);
        $smarty->setCompileDir(MVC_SYSTEM_PATH .'Runtime/Compile');
        $smarty->setConfigDir(MVC_SYSTEM_PATH .'Runtime/Configs');
        $smarty->setCacheDir(MVC_SYSTEM_PATH .'Runtime/Cache');

        if(!isset($model)) $model = $this->_model;
                
        $viewDataDictionary = new ViewDataDictionary($model);
        if(!isset($viewData) || count($viewData) == 0)
        {
            $vd = $this->_viewContext->GetViewData();
            foreach($vd as $key => $value)
                $viewDataDictionary->Add ($key, $value);
        }
        
        $viewContext = new ViewContext($this->_viewContext->Controller->ControllerContext);
        $viewContext->ViewData = $viewDataDictionary;
        
        $smarty->assign('Model', $model);
        $smarty->assignByRef('Url', new UrlHelper());
        $smarty->assignByRef('ViewData', $viewDataDictionary);
        
        
        $smarty->assignByRef('Html', new HtmlHelper($viewContext));

        try
        {
            $tpl = ucfirst( $_REQUEST['controller'] ) . "/$partialViewName.tpl";
            if (file_exists(MVC_ROOT_PATH . $area . DIRECTORY_SEPARATOR . $tpl))
            {
                return $smarty->fetch($tpl);
            }
            else
            {
                $tpl = "Shared/$partialViewName.tpl";
                if (file_exists(MVC_ROOT_PATH . $area . DIRECTORY_SEPARATOR . $tpl))
                {
                    return $smarty->fetch($tpl);
                }
            }
        }
        catch (Exception $e)
        {
            return $smarty->fetch('Shared/error.tpl');
        }
    }

    /**
     * 
     * @param string $attribute
     * @param string $property
     * @return ValidationAttribute
     */
    private function GetDataAnnotationAttribute($attribute, $property)
    {
        $p = $this->_reflector->getProperty($property);
        $doc = $p->getDocComment();
        
        if (preg_match("/#(.*){$attribute}\((.*)\)/", $doc, $matches))
        {
            $attributeClass = $matches[1] . $attribute . "Attribute";
            $params = explode(",", $matches[2]);
            for ($i = 0; $i < count($params); $i++)
            {
                $params[$i] = trim(preg_replace("/['|\"](.*)['|\"]/", "$1", $params[$i]));
            }
            
            if (class_exists($attributeClass))
            {
                $reflectionClass = new \ReflectionClass($attributeClass);
                $constructorParams = $reflectionClass->getConstructor()->getParameters();

                $i = 0;
                $args = array();
                foreach ($constructorParams as $constructorParam)
                {
                    $value = null;
                    if (isset($params[$i]))
                        $value = $params[$i];
                    else
                    {
                        //$constructorParam->newInstanceArgs
                    }
                    array_push($args, $value);
                    $i++;
                }
                return $reflectionClass->newInstanceArgs($args);
            }
        }
        return null;
    }

    /**
     * 
     * @param string $property
     * @return array
     */
    private function GetDataAnnotationValidationAttributes($property)
    {
        $attributes = array();
        $p = $this->_reflector->getProperty($property);
        $doc = $p->getDocComment();
        foreach (explode("\n", $doc) as $line)
        {
            if (preg_match("/#([\\a-zA-Z]+)\((.*)\)/", $line, $matches))
            {
                $attributeClass = $matches[1] . "Attribute";
                $params = explode(",", $matches[2]);
                $attributes["data-val"] = "true";

                for ($i = 0; $i < count($params); $i++)
                {
                    $params[$i] = trim(preg_replace("/['|\"](.*)['|\"]/", "$1", $params[$i]));
                }

                if (class_exists($attributeClass))
                {
                    $reflectionClass = new \ReflectionClass($attributeClass);
                    $constructorParams = $reflectionClass->getConstructor()->getParameters();

                    $i = 0;
                    $args = array();
                    foreach ($constructorParams as $constructorParam)
                    {
                        $value = null;
                        if (isset($params[$i]))
                            $value = $params[$i];
                        else
                        {
                            //$constructorParam->newInstanceArgs
                        }
                        array_push($args, $value);
                        $i++;
                    }

                    
                    $attribute = $reflectionClass->newInstanceArgs($args);

                    if (method_exists($attribute, "GetClientValidationRules"))
                    {
                        $rules = $attribute->GetClientValidationRules(new ModelMetadata($property), $this->_viewContext->Controller->ControllerContext);
                        foreach ($rules as $rule)
                        {
                            $attributes["data-val-" . $rule->ValidationType] = $rule->ErrorMessage;
                            foreach ($rule->ValidationParameters as $validationName => $validationParam)
                            {
                                $attributes["data-val-" . $rule->ValidationType . "-" . $validationName] = $validationParam;
                            }
                        }
                    }
                    else
                    {
                        $attr = strtolower( end(explode("\\", $matches[1])) );
                        $attributes["data-val-$attr"] = $attribute->ErrorMessage;
                    }
                }
            }
        }
        return $attributes;
    }

    /**
     * 
     * @param string $name Element name
     * @param array $attributes Element attributes
     * @param string $innerHtml Element inner HTML
     * @return string
     */
    private function RenderElement($name, $attributes, $innerHtml = null, $opened=false)
    {
        $element = "<$name";
        if (isset($attributes) && is_array($attributes))
        {
            $i = 0;
            foreach ($attributes as $key => $value)
            {
                if (is_int($key) && is_array($value))
                    $element .= " {$value[0]}=\"". $value[1]."\"";
                else
                    $element .= " $key=\"". $value."\"";
                $i++;
            }
        }
        if ($innerHtml != null)
            $element .= ">$innerHtml</$name>";
        else
        {
            if($opened)$element .= ">";
            else $element .= " />";
        }
        return $element;
    }
    
    private function ValueToString($object)
    {
        if($object instanceof \DateTime)
            return $object->format("d/m/Y");
        elseif(is_float($object))
            return number_format ($object);
        elseif(is_bool($object))
            return $object ? "true" : "false";
        
        return $object;
    }
}

?>