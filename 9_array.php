<?php

$users = array("Alice", "Bob");

$fruits = ["Apple", "Orange"];

// echo $users;

// Warning: Array to string conversion
// Array

print_r($fruits);

// Array ( [0] => Apple [1] => Orange)

var_dump($fruits);

// Array(2) { [0] => string(5) "Apple" [1] => string(6) "Orange" }

$users = [
    ["name" => "Peter", "age" => 15],
    ["name" => "Aung", "age" => 15],
    ["name" => "Hyper", "age" => 15], // you can add trailing comma
];

print_r($users);

echo $users[0]['name'], " ";

// adding data to array
$fruits[] = 'Mango'; // add to (the last index + 1) if the last index is 2, it will be added to the array at the index of 3
$fruits[5] = "Pineapple";

print_r($fruits);

// Array destructuring

$user = ["Alice", 22];
// list($name, $age) = $user;
[$name, $age] = $user;

echo $name, $age;         // Alice

$a_fruit = [ "name" => "Pineapple", "price" => "$50.49"];

["name" => $fruit_name, "price" => $price] = $a_fruit;

echo $fruit_name, $price;

// Array Spread

$num1 = [1, 2];
$num2 = [ ...$num1, 3];

print_r($num2);

// Array functions

// get the length of the array
echo count($num2); // 3

// check if it is array
echo is_array($num1); // 1 if true, empty if false

// check if an item is included in an array
echo in_array('3', $num2); // doesn't care about type, loosy type. 1 if true, empty if false

// return the index of an item if it is included
echo array_search('3', $num2); // 2; also doesn't care about type

// push, pop, shift, unshift, splice, slice
$mutated = ["b", "c", "d"];

array_push($mutated, 'a');
print_r($mutated);

array_pop($mutated);
print_r($mutated);

array_unshift($mutated, 'e');
print_r($mutated);

array_shift($mutated);
print_r($mutated);

$result = array_slice($mutated, 1, 2); // doesn't mutate
print_r($result);
print_r($mutated);


$result = array_splice($mutated, 1, 2); // does mutate
print_r($result);
print_r($mutated);

// getting only keys, and values

print_r(array_keys($a_fruit));
print_r(array_keys($users));
print_r(array_values($a_fruit));

// sorting, these functions will mutate the array

$nums = [1, 2, 3, 5, 4];
rsort($nums); // reverse by values
print_r($nums);

sort($nums); // sort by values
print_r($nums);

krsort($nums); // re-sort by index
print_r($nums);


// String to Array (explode function)
$input = "a quick brown fox";
$arr = explode(" ", $input); // explode(separater, string); Reminder: separater can't be an empty string
print_r($arr);

// Array to string (implode function)
$input = implode(" ", $arr);
print_r($input);

// Both explode and implode doesn't mutate the initial data in varaibles 

$a = [1, 2, 3, 4];
echo array_sum($a);

function myfunction($a, $b){
    return $a + $b;
};

echo array_reduce($a, "myfunction");

print_r(array_keys($a_fruit));
print_r($a);

