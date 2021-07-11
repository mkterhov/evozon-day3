<?php
require_once 'Iterator/NumberGenerator.php';

$numberGenerator = new NumberGenerator();
$numbersToGenerate = 5;
$numberGenerator->printIterable($numberGenerator->generateNumbers($numbersToGenerate));