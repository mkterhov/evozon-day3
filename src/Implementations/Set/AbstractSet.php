<?php
namespace Implementations\Set;

use Interfaces\SetInterface;

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