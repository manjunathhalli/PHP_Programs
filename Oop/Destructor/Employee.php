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

    /* Destructor */
    function __destruct()
    {
        echo $this->name . " : ";
        echo "Your position is " . $this->profile . "\n";
    }
}

// Object
$employee1 = new Employee("Manjunath", "HR");
$employee2 = new Employee("Basavaraj", "co-worker");
