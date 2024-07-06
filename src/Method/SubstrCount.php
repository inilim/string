<?php

namespace Inilim\String\Method;

/**
 * Returns the number of substring occurrences.
 */
function substrCount(
    string $haystack,
    string $needle,
    int $offset = 0,
    int|null $length = null
): int {
    if ($length !== null) {
        return \substr_count($haystack, $needle, $offset, $length);
    }

    return \substr_count($haystack, $needle, $offset);
}

/**
 * Returns the number of substring occurrences.
 */
    // public function substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null): int
    // {
    //     if ($length !== null) {
    //         return \substr_count($haystack, $needle, $offset, $length);
    //     }

    //     return \substr_count($haystack, $needle, $offset);
    // }
