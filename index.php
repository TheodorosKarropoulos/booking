<?php
/**
 * Created by WebSector
 */

require 'config.php';
require 'util/Auth.php';

function __autoload($class){
    require LIBS_PATH . $class . ".php";
}

$app = new Bootstrap();