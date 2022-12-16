<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../utils.php';

calcExecutionTime();

$elves = [];

$moves = explode(PHP_EOL, file_get_contents('./input.txt'));
$p1 = 0;
$p2 = 0;

$scores = [
    'A X' => 4,
    'A Y' => 8,
    'A Z' => 3,
    'B X' => 1,
    'B Y' => 5,
    'B Z' => 9,
    'C X' => 7,
    'C Y' => 2,
    'C Z' => 6,
];
$requiredResults = [
    'A X' => 'A Z',
    'A Y' => 'A X',
    'A Z' => 'A Y',
    'B X' => 'B X',
    'B Y' => 'B Y',
    'B Z' => 'B Z',
    'C X' => 'C Y',
    'C Y' => 'C Z',
    'C Z' => 'C X',
];


foreach($moves as $move) {
    if ($move === '') {
        continue;
    }

    $p1 += $scores[$move];

    $p2 += $scores[$requiredResults[$move]];
}

$executionTime = calcExecutionTime();

dump("Part 1: " .  $p1);
dump("Part 2: " .  $p2);

dump("Execution time: $executionTime");