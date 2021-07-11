<?php

namespace Implementations\Stack;

class Stack extends AbstractStack
{
    public function push($element)
    {
        $this->data[] = $element;
    }

    public function pop()
    {
        if (!$this->empty()) {
            $top = $this->data[$this->size() - 1];
            unset($this->data[$this->size() - 1]);
            $this->data = array_values($this->data);
            return $top;
        }
        return null;
    }

    public function empty(): bool
    {
        return $this->size() == 0;
    }

}