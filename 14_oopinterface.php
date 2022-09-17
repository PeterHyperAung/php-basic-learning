<?php
// interface is like abstract class but you can only write abstract methods. 
// And their interface or data type will become that interface object

interface Animal
{
    public function move();
}

class Dog implements Animal
{
    public function move()
    {
        echo "The dog is running";
    }
}

class Fish implements Animal
{
    public function move()
    {
        echo "The fish is swimming";
    }
}

function app(Animal $obj)
{
    $obj->move();
}

app(new Dog);
app(new Fish);

// when 2 class isn't the same type but their implementation is similar, you can use an interface

// Mutliple inheritance is accepted in interface

interface Livestock
{
    public function isFriendly();
}

class Cow implements Animal, Livestock
{
    public function move()
    {
        echo "The cow is walking";
    }
    
    public function isFriendly()
    {
        return true;
    }
}

// if you want to use mutliple inheritance to inherit properties and methods instead of implementing abstract methods, u can use traits

trait Math
{
    public function add($a, $b)
    {
        echo $a + $b;
    }
}

trait Area
{
    private $PI = 3.14;

    public function circle($r)
    {
        echo $this->PI * $r ** 2;
    }
}

class Calculator 
{
    // class constant with const keyword, you can't defy constant in traits. Class constants are static members.
    const PI = 3.14;
    use Math, Area; // you can simply use the use keyword and call the traits
}

// traits are not class, traits are things that can be used by the class
$calc = new Calculator;
$calc->add(1, 2);
$calc->circle(5);

echo Calculator::PI;
echo Calculator::class; // Namespace

// Magic Methods. Total magic methods -> 17
// __construct when the object is created
// __destruct when it is destoryed

class MathCls
{
    const PI = 3.14;
    private $name;

    public function __call($name, $args)
    {
        echo "Method $name doesn't exists";
    }

    static function __callStatic($name, $args) // must be used with static keyword
    {
        echo "Static method $name doesn't exists";
    }

    public function __invoke() 
    {
        echo "This is not a function";
    }

    public function __get($name)
    {
        echo "Cannot get $name";
    }

    public function __set($name, $value)
    {
        echo "Cannot set $name with $value";
    }

    public function __toString()
    {
        return "PI = ".static::PI;
    }
}

$obj = new MathCls;
echo $obj->PI;
$obj->PI = 3.142;
$obj->add(); // Method add doesn't exists.
echo $obj;
MathCls::add(); // Static method add doesn't exists.

// __call -> when a method is called in a normal way but it doesn't exist, this will be called
// __invoke -> will be executed when the object is executed like a function
// __callstatic -> when a static method is called but it doesn't exist, this will be called
// __toString -> when an object has to be converted into string, this function will be run;

// getter and setter __get and __set
// __get -> in a situation like when trying to access private or protected properites or method, that method will be run
// __set -> in a situation like when trying to overwrite private or protected properites or method, that method will be run

// magic methods are useful but you won't be encouraged to use them because if you can't use them correctly, that will make a chaos in your code