<?php
namespace System\DataAnnotations;
/**
 * Description of DisplayAttribute
 *
 * @author Edgar
 */
class DisplayAttribute extends \System\Attribute
{
    private $_name;
    public function __construct($name)
    {
        $this->_name = $name;
    }
}
?>