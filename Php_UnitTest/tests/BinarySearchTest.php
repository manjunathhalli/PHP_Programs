<?php
include "main/BinarySearch.php";

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class BinarySearchTest extends TestCase
{
    public $array = array(4, 6, 12, 34, 45, 76, 88);
    public $arrayempty = array();
    public $arrayone = array(1);
    public $arraytwo = array(1, 2);
    public $manyarray = array(6, 12, 34, 13, 56, 76);

    public function testEmptyData()
    {
        $binary = new BinarySearch();
        $result = $binary->search(1, $this->arrayempty);
        $this->assertEquals($result, false, $message = "Test Sucessfull!!");
    }
    public function testOneElement()
    {
        $binary = new BinarySearch();
        $result = $binary->search(1, $this->arrayone);
        $this->assertEquals($result, 0);
    }
    public function testTwoElements()
    {
        $binary = new BinarySearch();
        $result = $binary->search(3, $this->arraytwo);
        $this->assertEquals($result, 0);
        $result = $binary->search(2, $this->arraytwo);
        $this->assertEquals($result, 1);
    }
    public function testManyElements()
    {
        $binary = new BinarySearch();
        $result = $binary->search(37, $this->manyarray);
        $this->assertEquals($result, false);

        $result = $binary->search(56, $this->manyarray);
        $this->assertEquals($result, 4);
    }
    public function testLastFirstElement()
    {
        $binary = new BinarySearch();
        $result = $binary->search(6, $this->manyarray);
        $this->assertEquals($result, 0);
        $result = $binary->search(76, $this->manyarray);
        $this->assertEquals($result, 5);
    }
    public function testOutsideData()
    {
        $binary = new BinarySearch();
        $result = $binary->search(46, $this->manyarray);
        $this->assertEquals($result, false);
        $result = $binary->search(129, $this->manyarray);
        $this->assertEquals($result, false);
    }
}
