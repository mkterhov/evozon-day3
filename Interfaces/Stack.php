<?php

//push and pop, empty as operations
interface Stack
{
    public function push($element);
    public function pop();
    public function empty(): bool;
}