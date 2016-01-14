<?php
namespace System\Web;
use System\Security\IPrincipal;

/**
 * Description of WebPageRenderingBase
 *
 * @author edgar
 */
abstract class WebPageRenderingBase
{
    /**
     *
     * @var IPrincipal
     */
    private $_user;
    
    /**
     * 
     * @return IPrincipal
     */
    public function &GetUser()
    {
        if($this->_user == null)
        {
            
        }
        return $this->_user;
    }
    
    public abstract function RenderPage($path, $data);
}