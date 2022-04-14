<?php

namespace Shvv\InfectionPatchwok\Tests\Locator;

use Shvv\InfectionPatchwok\Locator\PhpTemplateLocator;
use PHPUnit\Framework\TestCase;

class PhpTemplateLocatorTest extends TestCase
{
    public function testLocator(): void
    {
        $sut = new PhpTemplateLocator();
        $this->assertSame('header.php', $sut->locate('header'));
    }
}
