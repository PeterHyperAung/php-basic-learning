<?php
// U have to code it almost the same way as JS error handling

function add($nums){
    if(!is_array($nums)){
        throw new Exception("Arguments must be array");
    }

    return array_sum($nums);
}

try{
    echo add(1);
} catch(Exception $err) {
    echo $err->getMessage();
} finally {
    echo "Done";
}


// if you use this properly when there is an error, your program won't crash
// Note: PHP's a lot of errors are normal error not exception error
// New versions added exception error
