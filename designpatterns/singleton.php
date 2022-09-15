<?php

// when you want an object to create only once from a class, you can use this technique 
// perfect design pattern for creating objects like setting

class setting
{

    static $setting = null;

    public $dark = 0;

    protected function __construct()
    {
        //
    }

    static function create(){
        if(!static::$setting){
            static::$setting = new static;
        }

        return static::$setting;
    }

}

$setting1 = Setting::create();
$setting1->dark = 1;
$setting2 = Setting::create();
echo $setting2->dark; // 1