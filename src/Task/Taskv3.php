<?php 

declare(strict_types=1);

namespace App\Task;

class Taskv3
{
    public function generate(int $start, int $end, string $glue): string
    {
        $parts = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            if (in_array($i, [1, 4, 9], true)) {
                $buffer .= 'joff';
            }

            if ($i > 5) {
                $buffer .= 'tchoff';
            }

            $parts[] = $buffer === '' ? (string) $i : $buffer;
        }

        return implode($glue, $parts);
    }
}
