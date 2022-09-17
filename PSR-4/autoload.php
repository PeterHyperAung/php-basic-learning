<?php
spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    include($class . '.php');
});

// this standard function will be invoked when a class is used in the file where it is existed
// take one argument and function
// 
