<?php
/**
 * Desc : multiply 2 values
 */
$y = readline("Enter y:");
$fn1 = fn ($x) => $x * $y;
$fn2 = function ($x) use ($y) {
    return $x * $y;
};

echo "Multfification is " . ($fn1(readline("Enter val:")));
