<?php

declare(strict_types=1);

namespace App\Tests\Task;

use App\Task\Taskv3;
use PHPUnit\Framework\TestCase;

class Taskv3Test extends TestCase
{
    /**
     * @dataProvider dataProviderForGenerateTesting
     */
    public function testGenerate(int $start, int $end, string $glue, string $expected): void
    {
        // arrange
        $taskv3 = new Taskv3();
        // act
        $output = $taskv3->generate($start, $end, $glue);
        // assert
        $this->assertSame($expected, $output);
    }

    public function dataProviderForGenerateTesting(): array
    {
        return [
            [1, 10, '-', 'joff-2-3-joff-5-tchoff-tchoff-tchoff-jofftchoff-tchoff'],
        ];
    }
}
