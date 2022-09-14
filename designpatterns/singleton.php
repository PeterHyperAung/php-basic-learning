<?php
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