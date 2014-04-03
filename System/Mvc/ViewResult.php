<?php
namespace System\Mvc;
/**
 * Description of ViewResult
 *
 * @author Edgar
 */
class ViewResult extends ViewResultBase
{
    private $masterName;
    
    /**
     * 
     * @return string
     */
    public function GetMasterName()
    {
        return $this->masterName;
    }
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function FindView(ControllerContext $context)
    {
        
    }
}
?>