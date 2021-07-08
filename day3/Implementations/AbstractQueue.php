<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once __ROOT__ . '/Interfaces/Queue.php';

abstract class AbstractQueue implements Queue
{
    protected array $data;

    /**
     * AbstractQueue constructor.
     */
    public function __construct()
    {
        $this->data = array();
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function empty(): bool
    {
        return $this->size() === 0;
    }

    public function top()
    {
        return reset($this->data) ?? null;
    }
}