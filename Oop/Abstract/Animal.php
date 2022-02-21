<?php
//create abstract class
abstract class Animal
{
    public $name;
    public $color;
    public function describe()
    {
        return "Animal name : " . $this->name . "\nAnimal color: " . $this->color;
    }
    abstract public function greet();
}
class Dog extends Animal
{
    public function greet()
    {
        return "Woof!";
    }

    public function describe()
    {
        return parent::describe() . ", and I'm a dog!";
    }
}
$animal = new Dog();
$animal->name = "Lucky";
$animal->age = 7;
echo $animal->describe();
echo $animal->greet();
