<?php
/**
 * Created by WebSector
 */

class View
{
    function __construct()
    {

    }

    public function render($name, $noInclude = false)
    {
        if($noInclude == true)
        {
            require VIEW_PATH . $name . '.php';
        }
        else
        {
            require VIEW_PATH . HEADER_HTML;
            require VIEW_PATH . $name . '.php';
            require VIEW_PATH . FOOTER_HTML;
        }
    }
}