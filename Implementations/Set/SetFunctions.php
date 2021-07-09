<?php

require_once __DIR__ . "/AbstractSet.php";


class SetFunctions extends AbstractSet
{
    public function add($element)
    {
        if(!$this->exists($element)) {
            array_push($this->data,$element);
        }
    }

    public function exists($element): bool
    {
        return in_array($element,$this->data);
    }

    public function intersection($set): SetFunctions
    {
        return new SetFunctions(array_intersect($this->getData(),$set->getData()));
    }

    public function reunion($set): SetFunctions
    {
        return new SetFunctions(array_merge($this->getData(),$set->getData()));
    }
}