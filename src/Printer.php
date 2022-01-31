<?php

declare(strict_types=1);

namespace App;

class Printer
{    
    public function print(array $array): void
    {
        echo implode(' ', $array) . PHP_EOL;
    }
}
