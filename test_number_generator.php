<?php
require_once 'Iterator/NumberGenerator.php';

$new = new NumberGenerator();

foreach (NumberGenerator::generateNumbers(10) as $item) {
    echo $item . PHP_EOL;
}
