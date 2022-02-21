<?php
class Overloading
{
    public function __call($name, $arguments)
    {
        if ($name == "area") {
            if (count($arguments) == 1) {
                echo "Area of square : " . $this->square($arguments[0]) . "\n";
            }

            if (count($arguments) == 2) {
                echo "Area of rectangle : " . $this->rectangle($arguments[0], $arguments[1]) . "\n";
            }
        }
    }

    public function square($side)
    {
        return $side * $side;
    }

    public function rectangle($length, $width)
    {
        return $length * $width;
    }
}

$area = new Overloading();
$area->area(5);
$area->area(5, 9);