<?php
$number = readline("Enter value :");
function checkNum($number)
{
    if ($number <= 1) {
        throw new Exception("Airthmetic exception\n number must be grater than or equal to 1");
    }
    return true;
}
try {
    checkNum($number);
    echo 'Valid Input';
} catch (Exception $exception) {
    echo 'Exception: ' . $exception->getMessage();
}
