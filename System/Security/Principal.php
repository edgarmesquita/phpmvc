<?php
namespace System\Security;
/**
 * Description of Principal
 *
 * @author Edgar
 */
class Principal extends \System\Object implements IPrincipal
{
    /**
     *
     * @var Identity
     */
    private $_identity;
    
    public function GetIdentity()
    {
        return $this->_identity;
    }
    
    public function SetIdentity(Identity $value)
    {
        $this->_identity = $value;
    }
}
?>