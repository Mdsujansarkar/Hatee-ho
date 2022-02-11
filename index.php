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

echo $task->generate(1, 20, ' ', [
    new MatcherConfig($dividesBy, 3, 'pa'),
    new MatcherConfig($dividesBy, 5, 'pow'),
]) . PHP_EOL;

echo $task->generate(1, 15, '-', [
    new MatcherConfig($dividesBy, 2, 'hatee'),
    new MatcherConfig($dividesBy, 7, 'ho'),
]) . PHP_EOL;

echo $task->generate(1, 10, '-', [
    new MatcherConfig($inArray, [1, 3, 9], 'joff'),
    new MatcherConfig($greaterThan, 5, 'tchoff'),
]) . PHP_EOL;
