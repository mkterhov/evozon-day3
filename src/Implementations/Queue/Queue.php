<?php

namespace Implementations\Queue;

use Interfaces\QueueInterface;

class Queue implements QueueInterface
{
    protected array $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function top()
    {
        return reset($this->data) ?? null;
    }

    public function enqueue($element)
    {
        $this->data[] = $element;
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            $head = $this->data[0];
            unset($this->data[0]);
            $this->data = array_values($this->data);
            return $head;
        }
        return false;
    }

    public function isEmpty(): bool
    {
        return count($this->data) == 0;
    }
}