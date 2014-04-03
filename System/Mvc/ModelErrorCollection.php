<?php
namespace System\Mvc;
/**
 * Description of ModelErrorCollection
 *
 * @author Edgar
 */
class ModelErrorCollection extends \ArrayObject
{
    function __construct()
    {
        parent::__construct(array());
    }

    /**
     * 
     * @param string $errorMessage
     */
    public function Add($errorMessage)
    {
        $this->offsetSet(null, $errorMessage);
    }
}
?>