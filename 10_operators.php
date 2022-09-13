<?php
// arithmetic operators: + - * / % **, Note that + can't be used for concatenation in php instead we use .
// assignment operators; = += -= *= /= .=

$num = 100;
echo $num;

$num += 100;
echo $num;

$num -= 100;
echo $num;

$num *= 10;
echo $num;

$num /= 20;
echo $num;

echo 7 % 3; // 1
echo 2 ** 3; // 8

$greet = "Welcome";
$name = "Peter";

$name .= " Aung";

echo $greet . ' ' . $name;
echo $greet, $name;
// Note that . is for concatenation and , is for giving more arguments to echo

echo "$greet $name";

$fruits = ["Apple", "Orange"];

echo "$fruits[0] and $fruits[1]";

// Single line comment
/*
Multi line comment
Multi line comment
Multi line comment
*/
# Single line comment

echo "<br/>";

// increment operator ++, decrement operator --, x++ x-- --x ++x
$x = 3;
$x++;
echo $x;
$y = --$x; // if $x-- -> $y = 4
echo $x, $y;

// Comparison operator == === != !== <> 
echo 1 === 1; // 1 (1 for true, empty for false)
echo 1 !== 1; // Empty
echo 2 <> 1; // 1

// most comparison opeartors work like Js's comparison operators === strongly type !== loosy type

echo 5 === "5"; // Empty
echo 5 == "5"; // 1

// > < <= >= works the same

// Spaceship operator

echo 3 <=> 5; // -1
echo 5 <=> 5; // 0
echo 5 <=> 3; // 1

// if they are the same, the result will be 0. if the first value is less, it will return -1. if not, it will return 1

echo "<br/>";

// Logical operators -> AND(&& and) OR(|| or) NOT(!)

$x = 3;
$y = 5;

echo $x === $y || $x === 3; // 1 (true)
echo $x === $y or $x === 3; // 1 (true)

echo $x === $y && $x === 3; //  (false)
echo $x === $y and $x === 3; //  (false)

echo !($x === $y); // 1 (true)

// xor Operator if one of them is true, the result will be true. If both of them is true or false, the result is false.

echo $x === $y xor $x === 3; // 1 (true)

// Ternary and nullish coalescing operator

$name = "";
echo $name ? $name : "Unknown"; // Unknown

$name = "Alice";
echo $name ? $name : "Unknown"; // Alice

// shorthand syntax for above statements
echo $name ?: "Unknown"; // you can do this when the true expression and condition is the same

// isset() + ternary
echo isset($name) ? $name : "Unknown"; // no warning if the variable doesn't exist

// A better expression than above one -> Null coalescing operator
echo $name ?? "Unknown"; // work the same way as above but better syntax

// null coalescing assignment opeartor
$result ??= $name; // if exist -> assign; not -> not assign
echo $result;
