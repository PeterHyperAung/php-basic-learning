<?php
// not included in GoF patterns
// Microsoft .NET framework started this; Laravel and Angular use this

interface Log // 1) interface for features
{
    public function write();
}


// 2) features
class Text implements Log
{
    public function write()
    {
        echo "Saving to text file.";
    }
}

class Memory implements Log
{
    public function write()
    {
        echo "Saving on memory.";
    }
}

class Services // 3) use this as the container // should be singleton
{
    protected function __construct(){
    }

    static function create(){
        return new Services;
    }

    public $container = [];
    public function register($name, $class)
    {   
        $this->container[$name] = $class;
    }
}

class Provider // 4) finally the provider provides the services contained in the services
{
    public $services;

    public function __construct($services)
    {
        $this->services = $services->container;
    }

    public function make($service)
    {
        if(isset($this->services[$service])) return new $this->services[$service];
        // else Error: Service doesn't exist
    }
}


$services = Services::create();
$services->register("text", Text::class);
$services->register("memory", Memory::class);

$provider = new Provider($services);

$log = $provider->make("text");
$log->write();      // Saving to text file

$log = $provider->make("memory");
$log->write();      // Saving on memory

// This is what we called provider pattern
// similar to stratgery pattern but has different usage
