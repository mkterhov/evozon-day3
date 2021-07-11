<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once __ROOT__ . '/Interfaces/SetInterface.php';
require_once __ROOT__ . '/Exceptions/ElementExists.php';

abstract class AbstractSet implements SetInterface
{
    const ELEMENT_EXISTS = 'Element already exists in the set!';

    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function showData(): void
    {
       print_r($this->getData(),true);
    }
}