<?php

namespace Math;

include "math.php";
include "calculator.php";
// include("math.php"); or include "math.php" or require("math.php") or require "math.php"
// all syntax above are valid
// include gives warning and does the below steps; require gives warning and stop the execution or doesn't do the below steps
// including the code more than once will execute the code inside the file more than once
// u can use include_once and require_once
// php modules are not pure like javascript; you can't just give the part you want; Instead u have to include the whole file.

echo PI;            // 3.14
// echo add(1, 2);  // if there is no sub-namespace in math.php

// Namespace -> when two modules have same variaibles or functions, u will face errors
// that's why u use namespace
// declare the namespace in the modules files and use it here like this
// functions and var are under the declared namespace; thus there will be no errors.

// echo Math\add(1, 2);
echo \Calculator\add([2, 3, 4]); // u need \namespace\ if the file use namespace 
// In \namespace\, the first \ is considered as the global namespace or the root
// \ -> for getting functions with same name as other modules' function 
// 

// echo add(1, 2); // they both have the same namespace. So, you don't need to add Math\ because it is already added due to the same namespace

// if namespace of math.php is Math\Basic, you'll have to include Basic. Here Basic is called Sub-Namespace
echo Basic\add(1, 2);
// you just correctly have to call the Sub-Namespace that u defined

