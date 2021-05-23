<?php
spl_autoload_register(function($class){
    $path="class";
    include $path.DIRECTORY_SEPARATOR.$class.'.php';
});