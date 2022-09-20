<?php
# $GLOBALS is a superglobal variable; Doesn't have _
# It has other superglobals such as $_GET & $_POST and global variables

$name = "Peter";

function hello(){
    // you can access global variables from $GLOBALS directly like this
    return "Hello " . $GLOBALS['name'];
};

echo hello(); // Hello Peter
