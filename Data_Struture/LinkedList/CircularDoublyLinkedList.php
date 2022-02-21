<?php
include "Node.php";
class CircularDoublyLinkedList
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
        $temp = new CDNode();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while (true) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head)
                    break;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

// test the code  
//create an empty LinkedList 
$circularDoublyLinkedList = new CircularDoublyLinkedList();

//Add first node.
$first = new CDNode();
$first->data = 10;
$first->next = null;
$first->prev = null;
//linking with head node
$circularDoublyLinkedList->head = $first;
//linking next of the node with head
$first->next = $circularDoublyLinkedList->head;
//linking prev of the head 
$circularDoublyLinkedList->head->prev = $first;

//Add second node.
$second = new CDNode();
$second->data = 20;
$second->next = null;
//linking with first node
$second->prev = $first;
$first->next = $second;
//linking next of the node with head
$second->next = $circularDoublyLinkedList->head;
//linking prev of the head 
$circularDoublyLinkedList->head->prev = $second;

//Add third node.
$third = new CDNode();
$third->data = 30;
$third->next = null;
//linking with second node
$third->prev = $second;
$second->next = $third;
//linking next of the node with head
$third->next = $circularDoublyLinkedList->head;
//linking prev of the head 
$circularDoublyLinkedList->head->prev = $third;

//print the content of list
$circularDoublyLinkedList->printList();