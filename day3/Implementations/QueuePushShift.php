<?php

require_once __DIR__ . "/AbstractQueue.php";

class QueuePushShift extends AbstractQueue
{

    public function enqueue($element)
    {
        array_push($this->data, $element);
    }

    public function dequeue()
    {
        if(!$this->empty()) {
            return array_shift($this->data);
        }
        return false;
    }
}