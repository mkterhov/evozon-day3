<?php

namespace Implementations\Stack;

use Interfaces\StackInterface;

abstract class AbstractStack implements StackInterface
{
    protected array $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function top()
    {
        return end($this->data) ?? null;
    }
}