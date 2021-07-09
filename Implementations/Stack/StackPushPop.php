<?php

require_once __DIR__ . "/AbstractStack.php";

class StackPushPop extends AbstractStack
{

    public function push($element)
    {
        array_push($this->data,$element);
    }

    public function pop()
    {
        if(!$this->empty()) {
            return array_pop($this->data);
        }
        return false;
    }
}