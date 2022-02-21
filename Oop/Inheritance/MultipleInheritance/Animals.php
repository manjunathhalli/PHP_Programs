<?php
class Animals
{
    public function sound()
    {
        echo "Dog Sound :";
    }
}
trait dog
{
    public function dogSound()
    {
        echo " Bark";
    }
}
class Color extends Animals
{
    use dog;
    public function dogColor()
    {
        echo "\nDog Color :Brown";
    }
}
$test = new Color();
$test->sound();
$test->dogSound();
$test->dogColor();
