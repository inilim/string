<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Determine if a given string contains all array values.
 */
class ContainsAll
{
    /**
     * @param  iterable<string>  $needles
     */
    public function __invoke(string $haystack, iterable $needles, bool $ignore_case = false): bool
    {
        foreach ($needles as $needle) {
            if (!Str::contains($haystack, $needle, $ignore_case)) {
                return false;
            }
        }

        return true;
    }
}
