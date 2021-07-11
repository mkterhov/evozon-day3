<?php

namespace Implementations\Set;

use Exceptions\ElementExists;
use Interfaces\SetInterface;

class Set extends AbstractSet
{

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @inheritDoc
     * @throws ElementExists
     */
    public function add($element): void
    {
        if ($this->contains($element)) {
            throw new ElementExists(self::ELEMENT_EXISTS);
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
     * @throws ElementExists
     */
    public function intersection(SetInterface $set): SetInterface
    {
        $newSet = new Set();
        foreach ($this->data as $element) {
            if ($this->contains($element) && $set->contains($element)) {
                $newSet->add($element);
            }
        }
        return $newSet;
    }

    /**
     * @throws ElementExists
     */
    public function union(SetInterface $set): SetInterface
    {
        $newSet = new Set($this->intersection($set)->getData());
        foreach ($this->data as $element) {
            if ((!$set->contains($element))) {
                $newSet->add($element);
            }
        }
        foreach ($set->getData() as $element) {
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