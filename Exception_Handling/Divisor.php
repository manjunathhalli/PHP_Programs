<?php
include "DivideByZeroException.php";
include "DivideByNegativeNoException.php";
function checkdivisor($dividend, $divisor)
{
    // Throw exception if divisor is zero  
    try {
        if ($divisor == 0) {
            throw new DivideByZeroException;
        } else if ($divisor < 0) {
            throw new DivideByNegativeNoException;
        } else {
            $result = $dividend / $divisor;
            echo "Result of division = $result \n";
        }
    } catch (DivideByZeroException $dze) {
        echo "Divide by Zero Exception! \n";
    } catch (DivideByNegativeNoException $dnne) {
        echo "Divide by Negative Number Exception \n";
    }
}

checkdivisor(18, 3);
checkdivisor(34, -6);
checkdivisor(27, 0);
