
<?php
function Search($list, $data)
{
    $lo = 0;
    $mid = -1;
    $hi = count($list) - 1;
    $index = -1;

    while ($lo <= $hi) {
        $mid = (int)($lo + (((float)($hi - $lo) / ($list[$hi] - $list[$lo])) * ($data - $list[$lo])));

        if ($list[$mid] == $data) {
            $index = $mid;
            break;
        } else {
            if ($list[$mid] < $data)
                $lo = $mid + 1;
            else
                $hi = $mid - 1;
        }
    }

    return $index;
}

$list = array(14, 26, 43, 72, 321);
$index = Search($list, 72);
echo "Element is found at index : " . $index . "\n";
