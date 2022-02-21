<?php
include "main/LinearSearch.php";

use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    public $linearSearchArray = array(4, 6, 12, 34, 13, 76, 23);
    public $arrayempty = array();
    public $array = array(34, 5, 8, 15, 13, 76, 23);
    public $arrayone = array(1);
    public $arraytwo = array(1, 2);
    public $manyarray = array(22, 34, 13, 56, 76);


    public function givenValueIsTrueShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 34);
        $this->assertEquals(3, $result);
    }
    public function testEmptyData()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->Search($this->arrayempty, 1);
        $this->assertEquals($result, false, $message = "Test Sucessfull!!");
    }
    public function testOneElement()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->arrayone, 1);
        $this->assertEquals($result, 0);
    }
    public function testTwoElements()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->arraytwo, 1);
        $this->assertEquals($result, 0);
        $result = $linearSearch->search($this->arraytwo, 2);
        $this->assertEquals($result, 1);
    }
    public function testLastFirstElement()
    {
        $linearSearch = new LinearSearch();
        $result =  $linearSearch->search($this->manyarray, 22);
        $this->assertEquals($result, 0);
        $result =  $linearSearch->search($this->manyarray, 76);
        $this->assertEquals($result, 4);
    }
    public function testOutsideData()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->manyarray, 69);
        $this->assertEquals($result, false);
        $result = $linearSearch->search($this->manyarray, 129);
        $this->assertEquals($result, false);
    }
}
