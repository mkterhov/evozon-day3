<?php
//write a function that returns an interator over a huge numbers of random numbers that are ascending (current random number greater than the last one), given
//that the number of random values to return is passed as function argument and the difference between two consecutive random numbers cannot be more than 10.

class NumberGenerator implements IteratorAggregate
{
    const MAX_DIFF = 10;
    public static function generateNumbers($nr): iterable
    {
        if($nr==0) {
            return array();
        }
        $i = 0;
        $lowBound = 0;
        $upperBound = self::MAX_DIFF;
        while ($i<=$nr) {
            yield mt_rand($lowBound,$upperBound);
            $lowBound +=self::MAX_DIFF;
            $upperBound+=self::MAX_DIFF;
            $i++;
        }
    }


    public function getIterator(): ArrayIterator
    {
        return new \ArrayIterator(self::generateNumbers(10));
    }
}