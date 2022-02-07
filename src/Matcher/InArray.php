<?php

declare(strict_types=1);

namespace App\Matcher;

use InvalidArgumentException;

class InArray implements MatcherInterface
{
    /**
     * @inheritdoc
     */
    public function match(int $value, $against): bool
    {
        if (!is_array($against)) {
            throw new InvalidArgumentException('Argument against is not an array');
        }

        return in_array($value, $against, true);
    } 
}
