<?php

namespace Shvv\InfectionPatchwok\Tests\Locator;

use Shvv\InfectionPatchwok\Locator\FilteredLocator;
use Shvv\InfectionPatchwok\Tests\MonkeyTestCase;
use Brain\Monkey\Filters;
use function Brain\Monkey\Functions\stubEscapeFunctions;

class FilteredLocatorTest extends MonkeyTestCase
{
    public function testIfNoHooks(): void
    {
        stubEscapeFunctions();
        $sut = FilteredLocator::new('my_very_cool_plugin');
        $this->assertSame('', $sut->locate('template.php'));
    }

    public function testWithAttachedHook(): void
    {
        stubEscapeFunctions();
        $sut = FilteredLocator::new('my_very_cool_plugin');
        Filters\expectApplied('my_very_cool_plugin')
            ->once()
            ->with('', 'template.php')
            ->andReturn('/dir/template.php');

        $this->assertSame('/dir/template.php', $sut->locate('template.php'));
    }
}
