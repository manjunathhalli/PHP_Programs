<?php
class Associtive
{

    public function orders()
    {
        $arr = array();
        $size = readline("Enter the Size: ");
        for ($i = 1; $i <= $size; $i++) {
            $ordename = readline("enter the order name : ");
            $orderplace = readline("enter the order place : ");
            $arr[$ordename] = $orderplace;
        }
        return $arr;
    }

    public function display($arr)
    {
        foreach ($arr as $key => $value) {
            echo $key . "=>" . $value . "\n";
        }
    }
}
$associtive = new Associtive();
$arr = $associtive->orders();
$associtive->display($arr);
