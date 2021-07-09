<?php

/**
 * Interface QueueInterface
 */
interface QueueInterface
{
    public function enqueue($element);

    public function dequeue();

    public function empty(): bool;
}