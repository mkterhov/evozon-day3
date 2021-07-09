<?php
require_once './Implementations/Queue/QueuePushShift.php';
require_once './Implementations/Queue/QueueSimple.php';

//$queue = new QueueSimple();
$queue = new QueuePushShift();

for ($i = 0;$i <5;$i++) {
    $queue->enqueue($i);
//    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}

//
//for ($i = 0;$i <200;$i++) {
////    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->pop() . PHP_EOL;
//}
while (!$queue->empty()) {
    echo $queue->dequeue() . PHP_EOL;
}