<?php
// context scope, need global keyword to use outter scope variables

$name = 'Bob';

function hello(){
    global $name;
    $name = "Peter"; // you can not only use variable but also overwrite it after declaration it globally in the function
    echo $name;
}

hello(); // Warning: Undefined variable $name, if you don't use the global keyword inside the function

function block_scope(){
    if(true){
        $name = "Alice";
    }

    echo $name;
}

block_scope(); // Alice
