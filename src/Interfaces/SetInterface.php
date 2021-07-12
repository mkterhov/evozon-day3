<?php

namespace Interfaces;

//- adding a value to the set
//- checking if value in set
//- sets intersection obtaining a third one with common values
//- sets reunion obtaining a third one with all values


interface SetInterface extends \Countable
{
    public function add($element): void;

    public function contains($element): bool;

    public function intersection($set): SetInterface;

    public function union($set): SetInterface;

    public function count(): int;
}