<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once __ROOT__ . '/Interfaces/QueueInterface.php';

abstract class AbstractQueue implements QueueInterface
{
    protected array $data;

    public function __construct()
    {
        $this->data = array();
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function top()
    {
        return reset($this->data) ?? null;
    }
}