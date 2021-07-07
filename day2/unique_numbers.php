<?php
/*
2. BACK TO THE "ROOTS" OF NUMBERS
You are given a text file called 'numbers.txt' which contains a series of digits (0-9), separated by a space character.
The file may contain tons of numbers. Write a function that outputs, in ascending order, all the digits that are present in this file.
Easy, right? Just one second, our client hates arrays AND stringand told the PHP guys to remove the array and
string concepts from the language and you are forced to obey her wishes.
First thought: Why would I ever want to work for such a client?
    Second thought: It's a challenge and I'm a programmer and I MUST love challenges. So let's do this!
E.g. File contains 8 8 1 3 8 4 0 0 0 0 0 0 0 0 0 0 8
Output: 0 1 3 4 8
*/


function getUniqueNumbers($filename): void
{
    if (!file_exists($filename)) {
        throw new \InvalidArgumentException("File doesn't exist");
    }

    $stream = fopen($filename, "r");

    $frequencySequence = 0b0000000000;
    if ($stream) {
        while (!feof($stream)) {
            $buffer = fgetc($stream);
            if ($buffer == ' ') {
                continue;
            }
            setBit($buffer, $frequencySequence);
        }
        fclose($stream);
    }
    echo sprintf('Final frequency sequence: %08b', $frequencySequence) . "\n";

    for ($i = 0; $i < 10; $i++) {
        if (isBitSet($frequencySequence, $i)) {
            echo sprintf('%d', $i) . " ";
        }
    }
}

/**
 * @param $buffer
 * @param $sequence
 */
function setBit($buffer, &$sequence): void
{
    $sequence |= 1 << $buffer;
}

function isBitSet($num, $bit): bool
{
    return 1 == (($num >> $bit) & 1);
}

getUniqueNumbers("numbers.txt");
