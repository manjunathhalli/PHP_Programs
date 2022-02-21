<?php
class InsertionSort
{
    public static function insertionSort(&$arr, $n)
    {
        for ($i = 1; $i < $n; $i++) {
            $temp = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $temp) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }

            $arr[$j + 1] = $temp;
        }
    }

    public function sortedArray(&$arr, $n)
    {
        for ($i = 0; $i < $n; $i++)
            echo $arr[$i] . " ";
        echo "\n";
    }
}
$insertion = new InsertionSort();
$arr = array(45, 32, 65, 12, 56, 34, 25, 28, 18);
$length = sizeof($arr);
echo "Before Sorting  ;\n";
$insertion->sortedArray($arr, $length);
$insertion->insertionSort($arr, $length);
echo "After Sorting :\n";
$insertion->sortedArray($arr, $length);
