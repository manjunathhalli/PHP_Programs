<?php
class TwoDArray
{

    static function display($arr)
    {
        echo "The Array is : \n";
        for ($i = 0; $i < count($arr); $i++) {
            foreach ($arr[$i] as $value) {

                echo $value ." ";
            }
            echo "\n";
        }
    }

    static function createAndIntilize($row, $col)
    {
        $arr = array();
        $row = readline("enter the row for array (max 10):");
        $col = readline("enter the column for array (max 10):");
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $arr[$i][$j] = readline("enter the value:");
            }
        }
        return $arr;
    }
}

$value = TwoDArray::createAndIntilize($row, $col);
TwoDArray::display($value);
