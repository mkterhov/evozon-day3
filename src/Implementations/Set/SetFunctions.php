<?php

namespace Implementations\Set;

use Exceptions\ElementExistsException;
use Interfaces\SetInterface;

class SetFunctions implements SetInterface
{
    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @throws ElementExistsException
     */
    public function add($element): void
    {
        if ($this->contains($element)) {
            throw new ElementExistsException('Element already exists in the set!');
        }
        array_push($this->data, $element);
    }

    public function contains($element): bool
    {
        return in_array($element, $this->data);
    }

    public function intersection($set): self
    {
        return new self(array_intersect($this->data, $set->data));
    }

    public function union($set): self
    {
        $resultSet = array_values(array_unique(array_merge($this->data, $set->data)));
        return new self($resultSet);
    }

    public function count(): int
    {
        return count($this->data);
    }
}