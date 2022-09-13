<?php
// can be defined using both '' and ""; "" works as template literal

$name = "Peter";
$role = 'web developer';
$company = 'Google';

echo "$name works as a $role at $company";

// escape character "\"


echo "<br/>\"$name\"<br/>";

// reminders: single quote doesn't work like this

// String functions
echo strlen($role);
echo "<br/>";
echo strlen("ငအ");
echo "<br/>";


// only getting the string piece that you want -> substr(), it doesn't mutate the variable; Instead it just return a new value.
$str = "A quick brown fox";

echo substr($str, 2, 8);
echo "<br/>";

// search and replace -> str_replace(), it doesn't mutate the variable; Instead it just return a new value.

echo str_replace("quick", "hurry", $str);
echo "<br/>";

echo $str;