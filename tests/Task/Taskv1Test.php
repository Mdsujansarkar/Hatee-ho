<?php

declare(strict_types=1);

namespace App\Tests\Task;

use App\Task\Taskv1;
use PHPUnit\Framework\TestCase;

class Taskv1Test extends TestCase
{
    /**
     * @dataProvider dataProviderForGenerateTesting
     */
    public function testGenerate(int $start, int $end, string $glue, string $expected): void
    {
        // arrange
        $taskv1 = new Taskv1();
        // act
        $output = $taskv1->generate($start, $end, $glue);
        // assert
        $this->assertSame($expected, $output);
    }

    public function dataProviderForGenerateTesting(): array
    {
        return [
            [1, 20, ' ', '1 2 pa 4 pow pa 7 8 pa pow 11 pa 13 14 papow 16 17 pa 19 pow'],
            [1, 15, ' ', '1 2 pa 4 pow pa 7 8 pa pow 11 pa 13 14 papow'],
            [1, -7, ' ', ''],
        ];
    }
}
