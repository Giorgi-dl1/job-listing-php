<?php
require_once 'config.php';
spl_autoload_register('myAutoloader');
function myAutoloader($className)
{
    require_once "lib/$className.php";
}

