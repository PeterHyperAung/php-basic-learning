<?php

$time = date("h");

if($time > 6 and $time < 18) echo "Day Time";
else echo "Night Time";

// Alternative ways

if($time > 6 and $time < 18) {
    echo "Day Time";
} else {
    echo "Night Time";
};


if($time > 6 and $time < 18): 
    echo "Day Time";
else: 
    echo "Night Time";
endif;

// Reminder: you need to endif if you use this syntax

// elseif

$day = date("D");
if ($day === "Sun") {
    echo "Today is Sunday";
} elseif ($day === "Sat") {
    echo "Today is Saturday";
} else {
    echo "Today is {$day}day";
};


// Switch statement
switch($day) {
    case "Sat":
    case "Sun":
        echo "Weekend";
        break;
    case "Fri":
        echo "TGIF";
        break;
    default:
        echo "Weekday";
};
// match expression

$result = match($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday",
};

echo $result;

// swtich uses == and math uses ===

$i = 1;
while($i <= 3){
    echo $i;
    $i++;
}


$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while($i < count($nums)){
    if($nums[$i] < 0){
        $i++;
        continue;
    }
    $result += $nums[$i];
    $i++;
}

echo $result;
// continue for skipping
// break statement for getting out of codeblocks
// both break and continue accept parameters. i.e 1 = get out of 1 block, 2 = get out of 2 code blocks. 1 is the default



$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while($i < count($nums)){
    if($nums[$i] < 0){
        $i++;
        break;
    }
    $result += $nums[$i];
    $i++;
}

echo $result;

// do while

$i = 1;
do {
    echo $i;
    $i++;
}while($i < 4);

// for loop is almost the same as js

for($i = 0; $i < 3; $i++){
    echo $i;
}

$nums = [1, 2, 3, 4];
$result = 0;
// array as item
foreach($nums as $num){
    $result += $num;
}

echo $result;

// you can also get both value and key from an array using foreach

$users = [ "name" => "Peter", "age" => 15 ];
$result = [];
foreach($users as $key => $value){
    $result[] = $key;
    $result[] = $value;
};

print_r($result);

