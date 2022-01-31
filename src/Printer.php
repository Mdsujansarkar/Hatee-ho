<?php

declare(strict_types=1);

namespace App;

class Printer
{    
    public function print(array $array) {
        array_walk($array, fn ($value) => print $value);
        echo PHP_EOL;
    }
}
