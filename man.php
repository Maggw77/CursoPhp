<?php
class Man
{

    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }
    public function greetings()
    {
        return "Hola " . $this->firstName . " " . $this->lastName;
    }
}
