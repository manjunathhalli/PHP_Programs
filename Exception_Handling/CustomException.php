
<?php
include "InvalidAgeException.php";
function validate($age)
{
    // Throw exception if age is not valid for voting  
    try {
        if ($age < 18) {
            throw new InvalidAgeException;
        } else {
            echo "He is Eligble for voting " . "\n";
        }
    } catch (InvalidAgeException $iae) {
        echo "Invalid age  Exception! " . "\n";
    }
}
validate(-10);
validate(18);
