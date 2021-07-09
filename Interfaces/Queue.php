<?php

/**
 * Interface Queue
 */
interface Queue
{
    public function enqueue($element);
    public function dequeue();
    public function empty(): bool;
}