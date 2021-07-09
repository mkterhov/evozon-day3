<?php

require_once 'Implementations/Stack/StackPushPop.php';
require_once 'Implementations/Stack/StackSimple.php';

//$queue = new StackPushPop();
$stack = new StackSimple();

for ($i = 0;$i <5;$i++) {
    $stack->push($i);
//    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}

//
//for ($i = 0;$i <200;$i++) {
////    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->pop() . PHP_EOL;
//}
while (!$stack->empty()) {
    echo $stack->pop() . PHP_EOL;
}
