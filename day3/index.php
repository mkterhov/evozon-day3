<?php

require_once 'Implementations/QueuePushShift.php';
require_once 'Implementations/QueueSimple.php';
require_once 'Implementations/StackPushPop.php';

//$queue = new QueuePushShift();
$stack = new StackPushPop();

for ($i = 0;$i <200;$i++) {
    $stack->push($i);
//    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}

//
//for ($i = 0;$i <200;$i++) {
////    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->pop() . PHP_EOL;
//}
while (!$stack->empty()) {
    $stack->pop();
}
