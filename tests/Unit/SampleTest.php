<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertSame(10, 5 + 5);
    }
}
