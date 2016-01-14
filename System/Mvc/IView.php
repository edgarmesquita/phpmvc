<?php
namespace System\Mvc;

/**
 *
 * @author edgar
 */
interface IView
{
    function Render(ViewContext $viewContext);
}