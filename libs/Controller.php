<?php
/**
 * Created by WebSector
 */

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = MODEL_PATH . $name . '_model.php';
        if(file_exists($path))
        {
            require MODEL_PATH . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}