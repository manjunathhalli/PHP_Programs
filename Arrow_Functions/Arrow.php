<?php
class Arrow
{

    static function multiplier($x)
    {
        return fn ($y) => $x * $y;
    }

}
$multiplied = Arrow::multiplier(2);

echo $multiplied(readline("enter the number :"));
