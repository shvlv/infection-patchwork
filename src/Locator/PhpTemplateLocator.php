<?php

declare(strict_types=1);

namespace Shvv\InfectionPatchwok\Locator;

class PhpTemplateLocator implements Locator
{
    public function locate(string $templateName): string
    {
        return $templateName . '.php';
    }
}
