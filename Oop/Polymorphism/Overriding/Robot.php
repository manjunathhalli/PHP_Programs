<?php

class Robot
{
    public function greet()
    {
        return 'Hello!';
    }
}

class Android extends Robot
{
    public function greet()
    {
        return ' Robot';
    }
}
$robot = new Robot();
echo $robot->greet();
$android = new Android();
echo $android->greet();
