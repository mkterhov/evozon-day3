<?php

require "vendor/autoload.php";

//$set1 = new SetFunctions();
//$set2 = new SetFunctions();

$set1 = new Set();
$set2 = new Set();

for ($i = 0; $i < 5; $i++) {
    try {
        $set1->add($i);
    } catch (ElementExists $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}
for ($i = 0; $i < 10; $i++) {
    try {
        $set2->add($i);
    } catch (ElementExists $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}
//var_dump($set1->getData());
//var_dump($set2->getData());
try {
    $set1->intersection($set2)->getData();
} catch (\Exception $e) {
    var_dump($e);
}
try {
    $set3 = $set1->union($set2);
    var_dump($set3);
} catch (\Exception $e) {
    var_dump($e);
}
