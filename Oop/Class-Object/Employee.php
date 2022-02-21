<?php
class Employee
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
$fname = readline("Enter your first name :");
$lname = readline("Enter your last name :");
$age = readline("Enter your Age :");
$employee = new Employee($fname, $lname, $age);

echo "First Name : " . $employee->getFirstName();
echo "\nLast Name : " . $employee->getLastName();
echo "\nAge : " . $employee->getAge();
