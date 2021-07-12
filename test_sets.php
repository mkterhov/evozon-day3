<?php

use Exceptions\ElementExistsException;
use Implementations\Set\Set;

require "vendor/autoload.php";


$set1 = new Set();
$set2 = new Set();

for ($i = 0; $i < 5; $i++) {
    try {
        $set1->add($i);
    } catch (ElementExistsException $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}

for ($i = 0; $i < 10; $i++) {
    try {
        $set2->add($i);
    } catch (ElementExistsException $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}

try {
    $set1->intersection($set2);
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
try {
    $set3 = $set1->union($set2);
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
