<?php

include "Node.php";
class CircularSinglyLinkedList
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
        $temp = new CSNode();
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

//create an empty LinkedList
$circularSingly = new CircularSinglyLinkedList();

//Add first node.
$first = new CSNode();
$first->data = 10;
//linking with head node
$circularSingly->head = $first;
//linking next of the node with head
$first->next = $circularSingly->head;

//Add second node.
$second = new CSNode();
$second->data = 20;
//linking with first node
$first->next = $second;
//linking next of the node with head
$second->next = $circularSingly->head;

//Add third node.
$third = new CSNode();
$third->data = 30;
//linking with second node
$second->next = $third;
//linking next of the node with head
$third->next = $circularSingly->head;

$circularSingly->printList();
