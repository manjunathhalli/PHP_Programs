<?php
include "Node.php";
class DoublyLinkedList
{
    public $head;
    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }

    //display the content of the list
    public function printList()
    {
        $temp = new DoublyNode();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

//create an empty LinkedList 
$doublyLinkedList = new DoublyLinkedList();

//Add first node.
$first = new DoublyNode();
$first->data = 10;
$first->next = null;
$first->prev = null;
//linking with head node
$doublyLinkedList->head = $first;

$second = new DoublyNode();
$second->data = 20;
$second->next = null;
//linking with first node
$second->prev = $first;
$first->next = $second;

$third = new DoublyNode();
$third->data = 30;
$third->next = null;
$third->prev = $second;
$second->next = $third;

$doublyLinkedList->printList();
