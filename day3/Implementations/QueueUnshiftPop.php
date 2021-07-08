<?php

require_once __DIR__ . "/AbstractQueue.php";

class QueueUnshiftPop extends AbstractQueue
{

    public function enqueue($element)
    {
        array_push($this->data, $element);
    }

    public function dequeue()
    {
        if(!$this->empty()) {
            $head = reset($this->data);
            array_shift($this->data);
            return $head;
        }
        return false;
    }
}