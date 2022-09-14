<?php
// functions are global scoped in PHP; No matter where you write, it is always accessable from anywhere.
// $b = 0 for default value, if no value is provided the default value will be used
function add($a, $b = 0){
    echo $a + $b; // if u don't return a value, NULL will be returned by default
    return $a + $b;
}

add(1, 2); // 3
add(1, 2, 3); // 3
// the arguments amount that you pass can't be less than what the function expected 
// It can be the exact amount or more than that amount

// Rest parameter
function multiply($a, ...$b){
    print_r($b);
};

multiply(1, 2, 3, 4);

// php old version's implementation to get values from parameters instead of rest parameter

function printargs(){
    $args = func_get_args();
    print_r($args);
};

printargs(1, 2, 3, 4);

// Type hinting (in function parameters)
function add2(Array $arr){
    return array_sum($arr);
}

// add2(1, 2, 3);

// Return type hinting 

function multiply2($a, ...$nums): float {
    return $a;
}

echo multiply2(1.2, 2);

// Union Type (for hinting more than one type), separate the types with |
function price(int|float $n){
    return "Price is $$n";
}

echo price(3.1); 
echo price(2);

// functions parameters has two types -> pass by value or pass by reference
// PHP default -> pass by value

$name = "Alice";
function hello($n) {
    $n = "Bob";
    echo "Hello $n";
}
hello($name); // Hello Bob
echo $name; // Alice

// You can also use pass by reference 
// when you use pass by reference, if you change the variable, the whole variable will change; like the following one
// you need & sign for pass by reference

$name = "Alice";
function hello2(&$n) {
    $n = "Bob";
    echo "Hello $n";
}

hello2($name); // Hello Bob
echo $name; // Bob

function one() {
    $name = "One";
    function two() {
        echo "Two";
    }
}
one(); // you have to call one function first to make the two function executable 
two();
echo $name;
// Warning: Undefined variable $name

// variable function

function varadd($a, $b){
    return $a + $b;
};

$add = "varadd";
echo "varadd"(1, 2);
echo $add(1, 2); // $add variable has the function's name in string data type and when u call it, it is basically the same as calling function in PHP

// function expression; nameless or anonymous function
$nums = [1, 2, 3, 4, 5];
$result = array_map(function ($n) { // this function right here
    return $n * 2;
}, $nums);
print_r($result);

// assigning a function expression and use statement for using outter scope variables
// use statement use the pass by value technique

$incrementAge = function($n) use($name) {
    $name = "Peter"; // outter value won't change
    return "$name is ". $n + 1 . " years old";
};

echo $incrementAge(15);
echo $name;

// Arrow function ( can use global variables directly )
// you need fn keyword because this => arrow syntax is also used in arrays

$testnum = 5;
$arrow = fn ($n) => $n * 5;

echo $arrow(10);

// Named arguments

function profile($name, $age, $gmail){
    return $name . $age . "@" . $gmail;
}

// when you use named arguments, they don't need to be in order anymore
echo profile(
    gmail: "peteraungmpa2006@gmail.com",
    name: "Min Phone Aung",
    age: 15, // you can add trailing comma
);
