<?php
namespace System\Security;

/**
 * Description of IPrincipal
 *
 * @author Edgar
 */
interface IPrincipal
{
    function GetIdentity();
    function SetIdentity(Identity $value);
}
?>