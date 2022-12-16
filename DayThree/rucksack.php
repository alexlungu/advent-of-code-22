<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../utils.php';

calcExecutionTime();

$items = explode(PHP_EOL, file_get_contents('./input.txt'));
$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

$priorities = array_flip(str_split($alphabet));

$p1 = 0;
$p2 = 0;

foreach ($items as $item) {

    if ($item === '') {
        continue;
    }
    $compartments = str_split($item, strlen($item) / 2);

    $compartmentA = str_split($compartments[0]);
    $compartmentB = str_split($compartments[1]);

    $dupe = array_values(array_unique(array_intersect($compartmentA, $compartmentB)));

    $p1 += $priorities[$dupe[0]] + 1;
}

$part2Groups = array_filter(array_chunk($items, 3), static fn($items) => count($items) === 3);

foreach ($part2Groups as $items) {
    $item1 = str_split($items[0]);
    $item2 = str_split($items[1]);
    $item3 = str_split($items[2]);

    $dupe = array_values(array_unique(array_intersect($item1, $item2, $item3)));

    $p2 += $priorities[$dupe[0]] + 1;
}

$executionTime = calcExecutionTime();

dump("Part 1: " .  $p1);
dump("Part 2: " .  $p2);

dump("Execution time: $executionTime");