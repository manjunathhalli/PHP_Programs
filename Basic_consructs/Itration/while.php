<?php
$number = readline('Enter the number : ');
$reverseNumber = 0;
while ($number > 1) {
    $remainder = $number % 10;
    $reverseNumber = ($reverseNumber * 10) + $remainder;
    $number = ($number / 10);
}
echo "Reverse number of $number is : $reverseNumber";