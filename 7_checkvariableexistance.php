<?php

echo isset($name); // Empty

$name = 'Bob';

echo isset($name); // 1 if exists

// defining constant variables in php
// you have to use define() function
define("MIN", 1);
define("MAX", 10);

echo MAX; // 10 
echo "<br/>";
echo MIN; // 1
// MAX = 20; // ERROR
// MIN = 10; // ERROR

// constant variables can be used anywhere directly