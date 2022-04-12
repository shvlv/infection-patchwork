<?php

declare(strict_types=1);

namespace Shvv\InfectionPatchwok\Locator;

interface Locator
{
    /**
     * @param string $templateName
     * @return string Full path
     */
    public function locate(string $templateName): string;
}
