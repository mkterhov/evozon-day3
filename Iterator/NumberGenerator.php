<?php
//write a function that returns an interator over a huge numbers of random numbers that are ascending (current random number greater than the last one), given
//that the number of random values to return is passed as function argument and the difference between two consecutive random numbers cannot be more than 10.

class NumberGenerator
{
    const MAX_DIFF = 10;
    public function generateNumbers($nr): iterable
    {
        if($nr==0) {
            return [];
        }
        $lowBound = 0;
        $upperBound = self::MAX_DIFF;
        for ($i=0;$i<$nr;$i++) {
            yield mt_rand($lowBound,$upperBound);
            $lowBound +=self::MAX_DIFF;
            $upperBound+=self::MAX_DIFF;
        }
    }

    public function printIterable(iterable $iterable)
    {
        foreach ($iterable as $item) {
            echo $item . PHP_EOL;
        }
    }
}