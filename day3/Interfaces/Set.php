<?php

//- adding a value to the set
//- checking if value in set
//- sets intersection obtaining a third one with common values
//- sets reunion obtaining a third one with all values

interface Set
{
    public function add($element);

    public function exists($element): bool;

    public function intersection(Set $set): Set;

    public function reunion(Set $set): Set;

    public function getData();
}