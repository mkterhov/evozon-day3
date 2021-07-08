<?php


require_once 'Implementations/SetFunctions.php';

$set1 = new SetFunctions();
$set2 = new SetFunctions();

for ($i = 0; $i < 5; $i++) {
    $set1->add($i);
}
for ($i = 3; $i < 10; $i++) {
    $set2->add($i);
}
var_dump($set1->getData());
var_dump($set2->getData());
var_dump($set1->intersection($set2)->getData());
var_dump($set1->reunion($set2)->getData());