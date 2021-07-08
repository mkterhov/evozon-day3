<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once __ROOT__ . '/Interfaces/Stack.php';

abstract class AbstractStack implements Stack
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
        return end($this->data) ?? null;
    }

    abstract public function push($element);

    abstract public function pop();

}