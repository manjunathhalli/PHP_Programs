<?php

/**
 * php Implementation of queue with array: FIFO
 * 1. getLength(): Get the length of the queue
 * 2. isEmpty(): Judge whether the queue is empty
 * 3. enqueue(): Join the team and add data at the end of the team.
 * 4. dequeue(): Leave the team, return and remove the team head data. You can't leave the team when it's empty.
 * 5. show(): Traverse the queue and output
 * 6. clear(): Clear queue
 */
class Queue
{

    public $dataStore = array();

    public function getLength()
    {
        return count($this->dataStore);
    }

    public function isEmpty()
    {
        return $this->getLength() === 0;
    }
    // Join the team and add data at the end of the team.
    public function enqueue($element)
    {
        $this->dataStore[] = $element;
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->dataStore);
        }
        return false;
    }
    public function show()
    {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->dataStore[$i] . PHP_EOL;
            }
        } else {
            return "empty";
        }
    }

    public function clearQueue()
    {
        unset($this->dataStore);
    }
}
// test
$q = new Queue();
$q->enqueue('a');
$q->enqueue('b');
$q->enqueue('c');
echo 'The length of the queue is:' . $q->getLength();
echo "\n";
echo 'The queue is:';
$q->show();
echo "\n";
$q->dequeue();
echo "\n";
echo "a Out of the queue:";
$q->show();
$q->clearQueue();
echo "After clearing the queue, the queue is" . $q->show();
