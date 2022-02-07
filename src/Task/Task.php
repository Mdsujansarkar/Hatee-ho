<?php 

declare(strict_types=1);

namespace App\Task;

use App\ValueObject\MatcherConfig;

class Task
{
    /**
     * @param MatcherConfig[] $matcherConfigs
     */
    public function generate(int $start, int $end, string $glue, array $matcherConfigs): string
    {
        $parts = [];
        
        for($i = $start; $i <= $end; $i++)
        {
            $buffer = '';

            foreach ($matcherConfigs as $matcherConfig) {
                if ($matcherConfig->getMatcher()->match($i, $matcherConfig->getAgainst())) {
                    $buffer .= $matcherConfig->getWord();
                }
            }

            $parts[] = $buffer === '' ? (string) $i : $buffer;
        }

        return implode($glue, $parts);
    }
}
