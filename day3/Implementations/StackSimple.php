<?php

require_once __DIR__ . "/AbstractStack.php";

class StackSimple extends AbstractStack
{
    public function push($element)
    {
        $this->data[] = $element;
    }

    public function pop()
    {
        if(!$this->empty()) {
            $top = $this->data[$this->size()-1];
            unset($this->data[$this->size()-1]);
            $this->data = array_values($this->data);
            return $top;
        }
        return null;
    }
}