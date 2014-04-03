<?php
namespace System\Mvc;
/**
 * Description of JsonResult
 *
 * @author Edgar
 */
class JsonResult extends ActionResult
{
    /**
     *
     * @var object
     */
    private $data;
    
    /**
     * 
     * @return object
     */
    public function GetData()
    {
        return $this->data;
    }
    
    /**
     * 
     * @param object $value
     */
    public function SetData($value)
    {
        $this->data = $value;
    }
    
    public function ExecuteResult(ControllerContext $context){
        header('Content-Type: application/json');
        echo json_encode($this->Data);
    }
}
?>