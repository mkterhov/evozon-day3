<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once __ROOT__ . '/Interfaces/StackInterface.php';

abstract class AbstractStack implements StackInterface
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
        return end($this->data) ?? null;
    }
}