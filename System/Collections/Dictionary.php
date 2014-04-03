<?php
namespace System\Collections;
/**
 * Description of Dictionary
 *
 * @author Edgar
 */
class Dictionary extends \ArrayObject
{
    function __construct()
    {
        parent::__construct(array());
    }

    public function Add($key, $value)
    {
        $this->offsetSet($key, $value);
    }

    public function Remove($key)
    {
        $this->offsetUnset($key);
    }
}
?>
