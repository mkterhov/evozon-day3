<?php

require_once __DIR__ . "/AbstractQueue.php";

class Queue extends AbstractQueue
{

    public function enqueue($element)
    {
        $this->data[] = $element;
    }

    public function dequeue()
    {
        if (!$this->empty()) {
            $head = $this->data[0];
            unset($this->data[0]);
            $this->data = array_values($this->data);
            return $head;
        }
        return false;
    }

    public function empty(): bool
    {
        return $this->size() === 0;
    }
}