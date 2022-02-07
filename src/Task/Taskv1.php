<?php 

declare(strict_types=1);

namespace App\Task;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Printer;

class Taskv1
{
    public function generate(int $start, int $end)
    {
        $return = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            if ($i % 3 === 0) {
                $buffer .= 'pa';
            }

            if ($i % 5 === 0) {
                $buffer .= 'pow';
            }

            $return[] = $buffer === '' ? $i : $buffer;
        }

        return $return;
    }
}

$printer = new Printer();

$ob = new Taskv1();
$printer->print($ob->generate(1, 20));
$printer->print($ob->generate(1, 10));