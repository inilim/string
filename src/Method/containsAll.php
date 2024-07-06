<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Determine if a given string contains all array values.
 * @param  iterable<string>  $needles
 */
function containsAll(string $haystack, iterable $needles, bool $ignore_case = false): bool
{
    foreach ($needles as $needle) {
        if (!Str::contains($haystack, $needle, $ignore_case)) {
            return false;
        }
    }

    return true;
}
