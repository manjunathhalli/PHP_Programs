<?php

class BubbleSort
{
    public function bubbleSort(&$arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }
    public function sortedArray($arr, $n)
    {
        for ($i = 0; $i < $n; $i++)
            echo $arr[$i] . " ";
        echo "\n";
    }
}
$bubble = new BubbleSort();
$arr = array(45, 32, 65, 12, 56, 34, 25, 28, 18);
$len = count($arr);
echo "Before Sorting :\n";
$bubble->sortedArray($arr, $len);
$bubble->bubbleSort($arr);
echo "After Sorting :\n";
$bubble->sortedArray($arr, $len);
