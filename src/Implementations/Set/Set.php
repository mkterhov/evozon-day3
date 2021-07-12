<?php

namespace Implementations\Set;

use Exceptions\ElementExistsException;
use Interfaces\SetInterface;

class Set implements SetInterface
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
        $this->data[] = $element;
    }

    public function contains($element): bool
    {
        foreach ($this->data as $el) {
            if ($element == $el) {
                return true;
            }
        }
        return false;
    }

    /**
     * @throws ElementExistsException
     */
    public function intersection($set): self
    {
        $newSet = new self();
        foreach ($this->data as $element) {
            if ($this->contains($element) && $set->contains($element)) {
                $newSet->add($element);
            }
        }
        return $newSet;
    }

    /**
     * @throws ElementExistsException
     */
    public function union($set): self
    {
        $newSet = new self($this->intersection($set)->data);
        foreach ($this->data as $element) {
            if ((!$set->contains($element))) {
                $newSet->add($element);
            }
        }
        foreach ($set->data as $element) {
            if ((!$this->contains($element))) {
                $newSet->add($element);
            }
        }
        return $newSet;
    }

    public function count(): int
    {
        return count($this->data);
    }
}