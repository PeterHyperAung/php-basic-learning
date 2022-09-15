<?php
// design pattern of dependency inversion in SOLID principle

interface Log
{
    public function write($log);
}

class TextLogger implements Log
{
    public function write($log){
        // Save $log to text file
        echo "In TextLogger";
        echo $log;
    }
}

class DatabaseLogger implements Log
{
    public function write($log){
        echo "In DatabaseLogger";
        echo $log;
    }
}

class App
{
    private $logger;

    public function __construct(Log $logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        $this->logger->write("App is running");
    }
}

$app = new App(new TextLogger);
$app->run();

// in the above example, instead of giving a fixed logger, you can now use the logger u want; Both textlogger and databaselogger.
// this is what we called dependency injection design pattern
// when u combine this with other patterns like Factory or Provider, you will be able to get service container