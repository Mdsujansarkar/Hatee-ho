<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Matcher\DividesBy;
use App\Matcher\GreaterThan;
use App\Matcher\InArray;
use App\Task\Task;
use App\ValueObject\MatcherConfig;

$dividesBy = new DividesBy();
$greaterThan = new GreaterThan();
$inArray = new InArray();

$task = new Task();

$configs = [
    new MatcherConfig($dividesBy, 3, 'pa'),
    new MatcherConfig($dividesBy, 5, 'pow'),
];

echo $task->generate(1, 15, ' ', $configs) . PHP_EOL;

$configs = [
    new MatcherConfig($dividesBy, 2, 'hatee'),
    new MatcherConfig($dividesBy, 7, 'ho'),
];

echo $task->generate(1, 20, '-', $configs) . PHP_EOL;

$configs = [
    new MatcherConfig($inArray, [1, 4, 9], 'joff'),
    new MatcherConfig($greaterThan, 5, 'tchoff'),
];

echo $task->generate(1, 15, ' ', $configs) . PHP_EOL;
