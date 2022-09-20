<?php
// header is for redirect and move_uploaded_file is to move the file stored temporarily in the server to your folder path.
$error = $_FILES['photo']['error'];
$type = $_FILES['photo']['type'];
$tmp = $_FILES['photo']['tmp_name'];


if($error){
    // redirecting while giving query string
    header('location: ../profile.php?error=file');
    exit();
}

move_uploaded_file($tmp, './photos/'.$name);

if($type === 'image/jpeg' or $type === 'image/png'){
    move_uploaded_file($tmp, "photos/profile.jpg");
    header('location: ../profile.php');
} else {
    header('location: ../profile.php?error=type');
}
