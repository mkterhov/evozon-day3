<?php

//- adding a value to the set
//- checking if value in set
//- sets intersection obtaining a third one with common values
//- sets reunion obtaining a third one with all values

interface SetInterface
{
    public function add($element);

    public function exists($element): bool;

    public function intersection(self $set): self;

    public function reunion(self $set): self;

    public function getData();
}