<?php
// A pattern for creating objects
// useful when you get data one by one or step by step; instead of getting all at once.
// for example, setting up a user profile. You will get the name first and then phone and etc; after getting all these u can finally build it

class ProfileBuilder
{
    private $name;
    private $phone;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setPhone($phone){
        $this->phone = $phone;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function build(){
        return new Profile($this);
    }
}

class Profile
{
    public $name;
    public $phone;

    public function __construct(ProfileBuilder $pb)
    {
        $this->name = $pb->getName();
        $this->phone = $pb->getPhone();
    }

    static function builder()
    {
        return new ProfileBuilder();
    }
}

$user = Profile::builder()
                    ->setName("Peter")
                    ->setPhone("09123456")
                    ->build();

var_dump($user);

// In laravel, this type of code is known as "Manager"