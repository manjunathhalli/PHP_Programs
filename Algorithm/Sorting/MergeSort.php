<?php
class MergeSort
{
    public function mergesort(&$Array, $left, $right)
    {
        if ($left < $right) {
            $mid = $left + (int)(($right - $left) / 2);
            $this->mergesort($Array, $left, $mid);
            $this->mergesort($Array, $mid + 1, $right);
            $this->mergeElements($Array, $left, $mid, $right);
        }
    }

    public function mergeElements(&$Array, $left, $mid, $right)
    {
        $n1 = $mid - $left + 1; //no of elements in LeftArray
        $n2 = $right - $mid;     //no of elements in RightArray    
        $LeftArray = array_fill(0, $n1, 0);
        $RightArray = array_fill(0, $n2, 0);
        for ($i = 0; $i < $n1; $i++) {
            $LeftArray[$i] = $Array[$left + $i];
        }
        for ($i = 0; $i < $n2; $i++) {
            $RightArray[$i] = $Array[$mid + $i + 1];
        }
        //index number
        $x = 0;
        $y = 0;
        $z = $left;
        while ($x < $n1 && $y < $n2) {
            if ($LeftArray[$x] < $RightArray[$y]) {
                $Array[$z] = $LeftArray[$x];
                $x++;
            } else {
                $Array[$z] = $RightArray[$y];
                $y++;
            }
            $z++;
        }

        // Copying the remaining elements of LeftArray
        while ($x < $n1) {
            $Array[$z] = $LeftArray[$x];
            $x++;
            $z++;
        }

        // Copying the remaining elements of RightArray
        while ($y < $n2) {
            $Array[$z] = $RightArray[$y];
            $y++;
            $z++;
        }
    }

    // function to print array
    public function PrintArray($Array, $n)
    {
        for ($i = 0; $i < $n; $i++)
            echo $Array[$i] . " ";
        echo "\n";
    }
}

$merge = new MergeSort();
$list = array(25, 16, 7, 5, 22, -8, 44);
$n = sizeof($list);
echo "Original Array\n";
$merge->PrintArray($list, $n);
$merge->mergesort($list, 0, $n - 1);
echo "\nSorted Array\n";
$merge->PrintArray($list, $n);
