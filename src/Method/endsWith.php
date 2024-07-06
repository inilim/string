<?php

namespace Inilim\String\Method;

/**
 * Determine if a given string ends with a given substring.
 *
 * @param  string|iterable<string>  $needles
 */
function endsWith(string $haystack, string|iterable $needles): bool
{
    if (!\is_iterable($needles)) $needles = (array) $needles;

    foreach ($needles as $needle) {
        if ((string) $needle !== '' && \str_ends_with($haystack, $needle)) {
            return true;
        }
    }

    return false;
}
