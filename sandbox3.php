<?php

//classes
class User
{
    private $email;
    private $name;

    public function __construct($name, $email)
    {
        $this->email = $email;
        $this->name = $name;
    }
    public function login()
    {
        echo $this->name . ' logged in';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return 'not a valid name';
        }
    }
}

// $userOne = new User();

// $userOne->login();
// echo $userOne->name;
// echo $userOne->email;

$userTwo = new User('Jaro', 'jaro@gmail.com');
// echo $userTwo->getName();
echo $userTwo->setName("Darek");
echo $userTwo->getName();
