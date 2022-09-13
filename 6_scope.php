<?php
// context scope, need global keyword to use outter scope variables

$name = 'Bob';

function hello(){
    global $name;
    echo $name;
}

hello(); // Warning: Undefined variable $name

function block_scope(){
    if(true){
        $name = "Alice";
    }

    echo $name;
}

block_scope(); // Alice
