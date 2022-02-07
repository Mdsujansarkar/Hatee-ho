<?php

declare(strict_types=1);

namespace App\Tests\Task;

use App\Task\Taskv2;
use PHPUnit\Framework\TestCase;

class Taskv2Test extends TestCase
{
    /**
     * @dataProvider dataProviderForGenerateTesting
     */
    public function testGenerate(int $start, int $end, string $glue, string $expected): void
    {
        // arrange
        $taskv2 = new Taskv2();
        // act
        $output = $taskv2->generate($start, $end, $glue);
        // assert
        $this->assertSame($expected, $output);
    }

    public function dataProviderForGenerateTesting(): array
    {
        return [
            [1, 15, '-', '1-hatee-3-hatee-5-hatee-ho-hatee-9-hatee-11-hatee-13-hateeho-15'],
        ];
    }
}
