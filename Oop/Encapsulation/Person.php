<?php
class Person
{
    public $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

$person = new Person();
$person->name = 'Manjunah Halli';
echo "Name : " . $person->getName();
$person->setAge(25);
echo "\nAge :" . $person->getAge();
