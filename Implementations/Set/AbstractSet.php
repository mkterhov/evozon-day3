<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once __ROOT__ . '/Interfaces/SetInterface.php';

abstract class AbstractSet implements SetInterface
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
}