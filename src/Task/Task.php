<?php 

declare(strict_types=1);

namespace App\Task;

use App\ValueObject\MatcherConfig;

class Task
{
    /**
     * @param MatcherConfig[] $configs
     */
    public function generate(int $start, int $end, string $glue, array $configs): string
    {
        $parts = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            foreach ($configs as $config) {
                if ($config->getMatcher()->match($i, $config->getAgainst())) {
                    $buffer .= $config->getWord();
                }
            }
            
            $parts[] = $buffer === '' ? $i : $buffer;
        }

        return implode($glue, $parts);
    }
}
