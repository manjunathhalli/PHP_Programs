<?php

class Employee
{
    // instance veriable
    public $name;
    public $position;

    function __construct($name, $position)
    {
        $this->name = $name;
        $this->profile = $position;
    }
    function showDetails()
    {
        echo $this->name . " : ";
        echo "Your position is " . $this->profile . "\n";
    }
}

// Object
$employee1 = new Employee("Manjunath", "HR");
$employee1->showDetails();

$employee2 = new Employee("Basavaraj", "co-worker");
$employee2->showDetails();
