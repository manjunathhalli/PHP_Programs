<?php
include "Node.php";
class SinglyLinkedList {
  public $head;

  public function __construct(){
    $this->head = null;
  }
  
  //Add new element at the end of the list
  public function push_back($newElement) {
    $newNode = new SINode();
    $newNode->data = $newElement;
    $newNode->next = null; 
    if($this->head == null) {
      $this->head = $newNode;
    } else {
      $temp = new SINode();
      $temp = $this->head;
      while($temp->next != null) {
        $temp = $temp->next;
      }
      $temp->next = $newNode;
    }    
  }

  //display the content of the list
  public function printList() {
    $temp = new SINode();
    $temp = $this->head;
    if($temp != null) {
      echo "\nThe list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
    } else {
      echo "\nThe list is empty.";
    }
  }    
};

// test the code  
$MyList = new SinglyLinkedList();

//Add three elements at the end of the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->printList();
