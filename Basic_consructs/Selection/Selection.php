<?php
$number = readline('Enter the number: ');
function fibonacciSeries($number)
{
    if ($number == 0) {
        return 0;
    } elseif ($number == 1) {
        return 1;
    } else {
        return (fibonacciSeries($number - 1) + fibonacciSeries($number - 2));
    }
}
for ($i = 0; $i < $number; $i++) {
    echo fibonacciSeries($i);
    echo "\n";
}
