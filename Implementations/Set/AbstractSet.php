<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once __ROOT__ . '/Interfaces/Set.php';

abstract class AbstractSet implements Set
{
    public array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    abstract public function add($element);

    abstract public function exists($element): bool;

    abstract public function intersection(Set $set): Set;

    abstract public function reunion(Set $set): Set;
}