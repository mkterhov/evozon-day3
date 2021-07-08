<?php

require_once 'Implementations/QueueUnshiftPop.php';
require_once 'Implementations/QueueSimple.php';

$queue = new QueueSimple();

for ($i = 0;$i <10;$i++) {
    $queue->enqueue($i);
    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() . PHP_EOL;
}


for ($i = 0;$i <11;$i++) {
    ;
    echo "SIZE: ". $queue->size() . " ELEMENT TOP: " . $queue->top() ." ELEMENT: " . $queue->dequeue() . PHP_EOL;
}