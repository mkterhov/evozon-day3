<?php

namespace Implementations\Stack;

use Interfaces\StackInterface;

class Stack implements StackInterface
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

    public function push($element)
    {
        $this->data[] = $element;
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            $top = $this->data[$this->size() - 1];
            unset($this->data[$this->size() - 1]);
            $this->data = array_values($this->data);
            return $top;
        }
        return null;
    }

    public function isEmpty(): bool
    {
        return $this->size() == 0;
    }

}