<?php
// A pattern for creating objects
// when you get arrays inside arrays to create objects and you have to create each object by using the data inside array ? you can use this pattern

// This one is for creating 
class Profile
{
    private $name;
    private $phone;
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
}

// This one is factory which will filter or loop through data and use the Profile or the class to create objects
class ProfileFactory
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function create()
    {
        $result = [];

         $result = [];

        foreach($this->data as $data){
            $name = $data['name'] ?? "Unknown";
            $phone = $data['phone'] ?? 'N/A';
            $result[] = new Profile($name, $phone);
        }

        return $result;
    }
}


$data = [
    [ "name" => "Alice", "phone" => "321456" ],
    [ "name" => "Bob" ],
    [ "name" => "Tom", "phone" => "654123" ],
];

$pf = new ProfileFactory($data);
$profiles = $pf->create();
print_r($profiles);
