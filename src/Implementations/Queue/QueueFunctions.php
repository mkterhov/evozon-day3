<?php

namespace Implementations\Queue;

use Interfaces\QueueInterface;

class QueueFunctions implements QueueInterface
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
        array_push($this->data, $element);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->data);
        }
        return false;
    }

    public function isEmpty(): bool
    {
        return empty($this->data);
    }
}