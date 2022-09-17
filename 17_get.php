<?php
// Variables like $_GET are called superglobal variables
print_r($_GET);

// localhost/get.php?name=Alice&age=22 -> Array ( [name] => Alice [age] => 22 )

// encoding -> used by browser (i.e turning space " " into %20)
// decoding -> opposite of encoding

// You have to decode and turn the string into array to use query string
// PHP does all the things behind the scene in query string and gives us $_GET
