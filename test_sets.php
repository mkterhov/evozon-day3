<?php


require_once 'Implementations/Set/SetFunctions.php';

$set1 = new SetFunctions();
$set2 = new SetFunctions();

for ($i = 0; $i < 5; $i++) {
    try {
        $set1->add($i);
    } catch (ElementExists $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}
for ($i = 0; $i < 15; $i++) {
    try {
        $set2->add($i);
    } catch (ElementExists $e) {
        echo 'whoops! ' . $e->getMessage() . PHP_EOL;
    }
}
//var_dump($set1->getData());
//var_dump($set2->getData());
//var_dump($set1->intersection($set2)->getData());
$set3 = $set1->reunion($set2);
var_dump(count($set3));
