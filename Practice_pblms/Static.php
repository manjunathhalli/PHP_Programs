<?php
class MyClass
{
    public static $str = "Hello Manjunath";

    public static function hello()
    {
        echo MyClass::$str;
        echo "\n" . "welcome to the industry ";
    }
}

echo MyClass::$str;
echo "\n";
echo MyClass::hello();
