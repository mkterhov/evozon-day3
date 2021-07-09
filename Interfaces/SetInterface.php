<?php

//- adding a value to the set
//- checking if value in set
//- sets intersection obtaining a third one with common values
//- sets reunion obtaining a third one with all values

interface SetInterface extends \Countable
{
    /**
     * @throws ElementExists
     * @param $element
     * @return mixed
     */
    public function add($element): void;

    public function contains($element): bool;

    public function intersection(self $set): self;

    public function union(self $set): self;

    public function getData();

    public function count(): int;
}