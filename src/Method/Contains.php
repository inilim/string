<?php

namespace Inilim\String\Method;

/**
 * Determine if a given string contains a given substring.
 */
class Contains
{
    /**
     * @param string|iterable<string> $needles
     */
    public function __invoke(string $haystack, string|iterable $needles, bool $ignore_case = false): bool
    {
        if ($ignore_case) $haystack = \mb_strtolower($haystack);

        if (!\is_iterable($needles)) $needles = (array) $needles;

        foreach ($needles as $needle) {
            if ($ignore_case) $needle = \mb_strtolower($needle);

            if ($needle !== '' && \str_contains($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }
}
