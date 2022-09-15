<?php

// This one just give us the layer to avoid complicated step by step code.
// In this example, all the necessary steps are coded in the start method to start the car .
// In this way, you only need to simply call the start method to start the car.

class CheckOilPressure
{
    public function check()
    {
        echo "Oil Pressure OK.";
    }
}

class CheckBreakFluid
{
    public function check()
    {
        echo "Break Fluid OK.";
    }
}

class Car
{
    public $oil;
    public $break;
    public function __construct()
    {
        $this->oil = new CheckOilPressure;
        $this->break = new CheckBreakFluid;
    }
    public function start()
    {
        $this->oil->check();
        $this->break->check();
        echo "Car Engine Started.";
    }
}

$car = new Car;
$car->start();

// the useage can be vary depending on the developers
// Laravel use Facade class like this


class Facede
{
    static function __callStatic($name, $args)
    {
        $name = strtoupper($name);
        $arg = $args[0] ?? "/";
        echo "Sending $name to $arg";
    }
}

class Route extends Facede
{
//
}

Route::get("/comments");
// Sending GET to /comments
Route::post();
// Sending POST to /

