<?php
// writing your own class, pascal case naming convention
class Animal 
{
    // protected can be used in the class and its inherited classes but not from outside
    // properties are defined like variables
    public $name; // you have to declare first
    private $age = 3;
    protected $protect = 'protected value';
    
    // when u use final keyword, the method or property can't be overwrite from the child class. You can also use this one for classes
    final public function run($name){ 
        $this->name = $name; // and then assign here
        echo "$this->name is running";
    }

    // static propeties and methods
    static $type = "Mammal";
    static function info()
    {
        echo " Group: " . static::$type; // use static keyword to access static properties inside class
    }
}

// Accessing static methods: use :: which is called "Scope Resolution Operator"
echo Animal::$type; // Mammal
Animal::info(); // Group: Mammal

// when you want to access properties and method inside the class, you have to use $this and -> syntax
// this->name
// you need object operator or dart -> to access properties and method from an object

// instantiating a class to get an object
$dog = new Animal;
$dog->name = "bobby";
$dog->run('bobby');
$cat = new Animal('Kitty');
// echo $dog->age; // Error; Cannot access private properties

var_dump($dog);

// Constructor (works right away when the class is instantiated)

// for php version 5 and older
/*
class Person 
{
    // constructor syntax, you just have to write the function which has the same name as the blue print
    public function Person(){
        echo "Creating Person object";
    }
}

$human = new Person;
*/

// syntax which works for all the version
class Person 
{
    public $name;
    // constructor syntax, __ underscore; methods like those are known as magic methods
    public function __construct($name){
        $this->name = $name;
        echo "Creating Person object";
    }
}

$human = new Person("Peter"); // you will get error if  you don't add parathesis and arguments


// Constructor property promotion makes the process easier for property assigned inside the constructor easier

// when u use final keyword on a class, the class can no longer inherited
final class Animal2
{
    public function __construct(private $name) // two steps are reduced: Declaring and assigning
    {

    }

    public function run()
    {
        echo $this->name;
    }
}

$fish = new Animal2('Gold');
$fish->run();

// Inheritance


class Dog extends Animal
{
    // overwriting parent's constructor from child
    public function __construct($name, private $color){
        parent::__construct($name); // like calling super method in JS
    }
    // That's why if an object is created from Dog class, instead of running only Animal constructor, it will execute this one first and then its parent constructor
    // you can also do in this way to overwrite methods and properties
    public function bark(){
        echo "$this->name braks.. Woof woof!";
    }

    public function showprotectedvalue(){
        echo "$this->protect is the protected value";
    }
}

$bobby = new Dog("Bobby");
$bobby->run(); 
$bobby->bark();
$bobby->showprotectedvalue();

// Some languages allow multiple inheritance ``` class Child extends Mom, Dad, Grandpa ```
// Language like PHP doesn't allow it but instead you can do inheritance one after another like the following
/*
class Animal
{
    static function info()
    {
        echo "Animal Class";
    }
}

class Dog extends Animal
{
    //
}

class Fox extends Dog
{
    //
}

Fox::info(); // Animal Class
*/

// abstract class
abstract class Food
{
    public abstract function taste();
}

// The one that inherit from the abstract class should implement the method which is defined inside the parent class with abstract keyword
class Sweet extends Food
{
    public function taste(){
        echo "Sweet";
    }
}


// design patterns are the way to write code or solve common problems in a much effcient way
