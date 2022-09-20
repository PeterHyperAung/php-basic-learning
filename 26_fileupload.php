<?php

// $_FILES superglobal for getting file objects

print_r($_FILES);
// 5 data -> name, type, tmp_name (where the received file is currently stored), error (if none 0), size (in byte)

$name = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

// this function takes two parameters, current place and the place where you wanna store this file, since u just give the filename, it'll be stored in this directory
move_uploaded_file($tmp, $name);

