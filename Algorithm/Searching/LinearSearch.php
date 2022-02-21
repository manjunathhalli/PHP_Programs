<?php
function search($arr, $x)
{
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $x)
            return $i;
    }
    return -1;
}

$arr = array(26, 5, 25, 8, 1, 56, 15, 58, 38);
$x = 56;

$result = search($arr, $x);
if ($result == -1)
    echo "Element is not present in array";
else
    echo "Element is present at index " . $result . " position";
