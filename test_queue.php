<?php

use Implementations\Queue\QueueFunctions;

require "vendor/autoload.php";

//$queue = new Queue();
$queue = new QueueFunctions();

for ($i = 0;$i <5;$i++) {
    $queue->enqueue($i);
//    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}

//
//for ($i = 0;$i <200;$i++) {
////    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->pop() . PHP_EOL;
//}
while (!$queue->isEmpty()) {
    echo $queue->dequeue() . PHP_EOL;
}