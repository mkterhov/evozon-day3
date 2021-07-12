<?php

namespace Implementations\Stack;

use Interfaces\StackInterface;

class StackFunctions implements StackInterface
{
    protected array $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function push($element)
    {
        array_push($this->data, $element);
    }

    public function pop(): ?bool
    {
        if (!$this->isEmpty()) {
            return array_pop($this->data);
        }
        return false;
    }

    public function isEmpty(): bool
    {
        return empty($this->data);
    }
}