<?php

require_once __DIR__ . "/AbstractStack.php";

class StackFunctions extends AbstractStack
{

    public function push($element)
    {
        array_push($this->data, $element);
    }

    public function pop(): ?bool
    {
        if (!$this->empty()) {
            return array_pop($this->data);
        }
        return false;
    }

    public function empty(): bool
    {
        return empty($this->data);
    }
}