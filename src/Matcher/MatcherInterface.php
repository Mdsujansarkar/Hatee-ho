<?php

declare(strict_types=1);

namespace App\Matcher;

/**
 * @throws InvalidArgumentException
 */
interface MatcherInterface
{
    public function match(int $value, mixed $against): bool;
}
