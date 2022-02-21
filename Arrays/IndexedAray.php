<?php
class IndexedAray
{
    public function display($arr)
    {
        echo "array elements are";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . " ";
        }
        echo "\n";
    }

    public function myArray()
    {
        $arr = array();
        $size = readline("enter the number of element : ");
        echo "enter the elements \n";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = readline();
        }
        return $arr;
    }
}

$obj = new IndexedAray();
$value = $obj->myArray();
$obj->display($value);
//print_r($value);
//var_dump($value);
