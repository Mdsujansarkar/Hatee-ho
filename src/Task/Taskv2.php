<?php 

declare(strict_types=1);

namespace App\Task;

class Taskv2
{
    public function generate(int $start, int $end, string $glue): string
    {
        $parts = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            if ($i % 2 === 0) {
                $buffer .= 'hatee';
            }

            if ($i % 7 === 0) {
                $buffer .= 'ho';
            }

            $parts[] = $buffer === '' ? (string) $i : $buffer;
        }

        return implode($glue, $parts);
    }
}
