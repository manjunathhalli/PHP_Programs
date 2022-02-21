<?php
class LinearSearch
{
    public function search($linearSearchArray, $value)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $value)
                return $i;
        }
        return false;
    }
}
