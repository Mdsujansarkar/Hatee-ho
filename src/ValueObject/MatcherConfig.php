<?php

declare(strict_types=1);

namespace App\ValueObject;

use App\Matcher\MatcherInterface;

class MatcherConfig
{
    private MatcherInterface $matcher;
    private $against;
    private string $word;

    public function __construct(MatcherInterface $matcher, $against, string $word)
    {
        $this->matcher = $matcher;
        $this->against = $against;
        $this->word = $word;
    }

    public function getMatcher(): MatcherInterface
    {
        return $this->matcher;
    }

    public function getWord(): string
    {
        return $this->word;
    }

    public function getAgainst()
    {
        return $this->against;
    }
}
