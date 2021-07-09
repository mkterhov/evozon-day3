<?php

require_once __DIR__ . "/AbstractSet.php";


class SetFunctions extends AbstractSet
{
    public function add($element): void
    {
        if ($this->contains($element)) {
            throw new ElementExists('Element already exists in the set!');
        }
        array_push($this->data, $element);
    }

    public function contains($element): bool
    {
        return in_array($element, $this->data);
    }

    public function intersection(SetInterface $set): SetInterface
    {
        return new SetFunctions(array_intersect($this->getData(), $set->getData()));
    }

    public function reunion(SetInterface $set): SetInterface
    {
        $resultSet = array_unique(array_merge($this->getData(), $set->getData()));
        return new SetFunctions($resultSet);
    }

    public function count(): int
    {
        return count($this->data);
    }
}