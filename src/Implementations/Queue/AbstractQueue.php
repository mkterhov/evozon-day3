<?php

namespace Implementations\Queue;

use Interfaces\QueueInterface;

abstract class AbstractQueue implements QueueInterface
{
    protected array $data;

    public function __construct()
    {
        $this->data = array();
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function top()
    {
        return reset($this->data) ?? null;
    }
}