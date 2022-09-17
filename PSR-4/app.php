<?php

// don't need to include modules files anymore, u just need to include namespace and use the object or function from it.
// file will automatically be included
include('autoload.php');

use Library\Helper\Calculator;

$calc = new Calculator;

echo $calc->add([1, 2]);

// if you use this technique, u should follow psr-4 rules