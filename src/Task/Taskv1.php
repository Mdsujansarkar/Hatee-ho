<?php 

declare(strict_types=1);

namespace App\Task;

use App\Printer;

class Taskv1
{
    public function generate(int $start, int $end)
    {
        $return = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            if ($i % 3 === 0) {
                $return[$i] = 'pa'. ' ';
            }

            if ($i % 5 === 0) {
                $return[$i] = 'pow'. ' ';
            }

            if ($i % 3 === 0 && $i % 5 === 0) {
                $return[$i] = 'papow'. ' ';
            }

            if (!($i % 3  === 0) && !($i % 5 === 0) && !($i % 3 === 0 && $i % 5 === 0)) {
                $return[$i] = $i. ' ';
            }

            return $return;
        }
    }
}

$printer = new Printer();

$ob = new Taskv1();
$printer->print($ob->generate(1, 20));
$printer->print($ob->generate(1, 10));