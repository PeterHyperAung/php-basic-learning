<?php

// loosy type -> var_dump for it, it returns not only type but also data.

$var;
var_dump($var); // Warning: Undefined Variable // NULL

$var = 123;
var_dump($var); // int(123)

$var = "abc";
var_dump($var); // String(3) "abc"
