<?php

// __construct example 1
class Car
{
    public $name;

    public function __construct($name)
    {
        echo $this->name = $name;
    }
}

$car = new Car('Benz');

echo "<br>";

// __construct example 2
class Person
{
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getFullName()
    {
        return 'FirstName: ' . $this->first_name . ' LastName: ' . $this->last_name;
    }
}

$person = new Person('Saman', 'Zangyehvandi');

echo $person->getFullName();

echo "<br>";


// __construct && __destruct example 3
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$fruit = new Fruit('Banana', 'yellow');