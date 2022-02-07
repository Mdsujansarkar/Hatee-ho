<?php 

declare(strict_types=1);

namespace App\Task;

class Taskv1
{
    public function generate(int $start, int $end, string $glue): string
    {
        $parts = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            if ($i % 3 === 0) {
                $buffer .= 'pa';
            }

            if ($i % 5 === 0) {
                $buffer .= 'pow';
            }

            $parts[] = $buffer === '' ? (string) $i : $buffer;
        }

        return implode($glue, $parts);
    }
}
