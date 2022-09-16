<?php

require('calculator.php');

// without alias
/*

include('Calculator.php');

use Library\Helper\Math\Basic\Calculator;

$calc1 = new Calculator;
$calc2 = new Calculator; 

*/

// with alias like giving ur desired name
use Library\Helper\Math\Basic\Calculator as Math;

$calc1 = new Math;
$calc1.add(1, 2);
$calc2 = new Math;
$calc2.add(1, 2);

