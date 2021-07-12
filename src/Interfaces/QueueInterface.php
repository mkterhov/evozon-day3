<?php

namespace Interfaces;

/**
 * Interface QueueInterface
 */
interface QueueInterface
{
    public function enqueue($element);

    public function dequeue();

    public function isEmpty(): bool;

    public function top();
}