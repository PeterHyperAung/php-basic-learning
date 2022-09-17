<?php

include('vendor/autoload.php');

// you don't need to include class due to class autoload.php
use Carbon\Carbon;
use App\Library\Math;

echo Carbon::now()->addDay();
echo Math::add(1, 2); // 3

