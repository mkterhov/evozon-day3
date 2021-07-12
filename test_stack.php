<?php
require_once 'vendor/autoload.php';

use Implementations\Stack\Stack;

//$queue = new StackFunctions();
$stack = new Stack();


for ($i = 0;$i <5;$i++) {
    $stack->push($i);
//    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}

//
//for ($i = 0;$i <200;$i++) {
////    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->pop() . PHP_EOL;
//}
while (!$stack->isEmpty()) {
    echo $stack->pop() . PHP_EOL;
}
