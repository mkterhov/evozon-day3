<?php

namespace Interfaces;

//push and pop, empty as operations
interface StackInterface
{
    public function push($element);

    public function pop();

    public function empty(): bool;
}