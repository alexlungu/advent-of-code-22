<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../utils.php';

calcExecutionTime();

$elves = [];
$calories = explode(PHP_EOL, file_get_contents('./input.txt'));

foreach($calories as $elfCat) {
    if ($elfCat === '') {
        $elves[] = 0;
        continue;
    }
    if(empty($elves)) {
        $elves[] = $elfCat;
        continue;
    }

    $elves[array_key_last($elves)] += (int)$elfCat;
}

$executionTime = calcExecutionTime();

dump("Step 1: " . max($elves));

rsort($elves);

dump("Step 2: " . $elves[0] + $elves[1] + $elves[2]);

dump("Execution time: $executionTime");