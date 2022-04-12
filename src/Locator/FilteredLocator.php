<?php

declare(strict_types=1);

namespace Shvv\InfectionPatchwok\Locator;

final class FilteredLocator implements Locator
{
    private string $filterName;

    private function __construct(string $filterName)
    {

        $this->filterName = $filterName;
    }

    public static function new(string $filterName): self
    {
        return new self($filterName);
    }

    public function locate(string $templateName): string
    {
        /** @psalm-suppress TooManyArguments */
        return (string) apply_filters(
            $this->filterName,
            '',
            $templateName
        );
    }
}
