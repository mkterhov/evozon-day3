<?php

require_once __DIR__ . "/AbstractSet.php";

class Set extends AbstractSet
{

    private int $count;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->count = count($this->data);
    }

    private function incrementCount(): void
    {
        $this->count++;
    }

    /**
     * @inheritDoc
     */
    public function add($element): void
    {
        if ($this->contains($element)) {
            throw new ElementExists(self::ELEMENT_EXISTS);
        }
        $this->data[] = $element;
        $this->incrementCount();
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
        $newSet = new SetFunctions();
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
        $newSet = new SetFunctions($this->intersection($set)->getData());
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
        return $this->count;
    }
}