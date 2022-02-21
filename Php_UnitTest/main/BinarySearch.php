<?php

class BinarySearch
{

    public function search($element, $data)
    {
        $begin = 0;
        $end = count($data) - 1;
        $prev_begin = $begin;
        $prev_end = $end;
        while (true) {
            $position = round(($begin + $end) / 2);
            if (isset($data[$position])) {
                if ($data[$position] == $element) {
                    return $position;
                }
                if ($data[$position] > $element) {
                    $end = floor(($begin + $end) / 2);
                } elseif ($data[$position] < $element) {
                    $begin = ceil(($begin + $end) / 2);
                }
            }
            if ($prev_begin == $begin && $prev_end == $end) {
                return false;
            }
            $prev_begin = $begin;
            $prev_end = $end;
        }
    }
}

$binary = new BinarySearch();
$myarray = array(22, 32, 65, 72, 86, 94);

$value = $binary->search(86, $myarray);
echo "searching index  element is  : $value" . "\n";
