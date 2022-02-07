<?php

declare(strict_types=1);

namespace App\Matcher;

use InvalidArgumentException;

class GreaterThan implements MatcherInterface
{
    /**
     * @inheritdoc
     */
    public function match(int $value, $against): bool
    {
        if (!is_int($against)) {
            throw new InvalidArgumentException('Argument against is not an integer');
        }

        return $value > $against;
    } 
}
