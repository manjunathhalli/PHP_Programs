<?php
class Node
{
    public $data;
    public $next;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }
}
class Queue
{
    public $head;
    public $tail;
    public $count;

    public function __construct()
    {
        $this->head;
        $this->tail;
        $this->count;
    }

    //Add new item to queue
    public function enqueue($value)
    {
        $newNode = new Node($value);
        //if queue is empty add node at queue
        if ($this->head == NULL) {
            $this->head = $newNode;
        } else {
            //Add node at the end
            $this->tail->next = $newNode;
        }
        $this->count++;
        $this->tail = $newNode;
    }
    //Delete a element from queue at front 
    public function dequeue()
    {
        if ($this->head == NULL) {
            echo "Queue is Empty\n";
            return -1;
        } else {
            $temp = $this->head;
            $this->head = $this->head->next;
            $this->count--;
            return $temp->data;
        }
    }
    public function peek()
    {
        if ($this->head == NULL) {
            echo "The queue is empty\n";
            return -1;
        }
        return $this->head->data;
    }
    public function size()
    {
        return $this->count;
    }
    public function isEmpty()
    {
        if ($this->head == NULL) {
            return true;
        } else {
            return false;
        }
    }
    public function printQueue()
    {
        $list = $this->head;
        if ($list != null) {
            while ($list != null) {
                echo $list->data . " ";
                $list = $list->next;
            }
        }
    }
}

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
echo "Queue list is : ";
$queue->printQueue();
echo "\nSize Of Queue is : " . $queue->size();
echo "\nHead of the Queue is : " . $queue->peek();
echo "\nDequeue element is : " . $queue->dequeue();
echo "\nSize of Queue is : " . $queue->size();
echo "\nHead of the Queue is : " . $queue->peek();
