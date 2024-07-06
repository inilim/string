<?php

namespace Inilim\String\Method;

/**
 * Find the multi-byte safe position of the first occurrence of a given substring in a string.
 */
function position(
    string $haystack,
    string $needle,
    int $offset = 0,
    string|null $encoding = 'UTF-8'
): int|false {
    return \mb_strpos($haystack, $needle, $offset, $encoding);
}

/**
 * Find the multi-byte safe position of the first occurrence of a given substring in a string.
 */
    // public function position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8'): int|false
    // {
    //     return \mb_strpos($haystack, $needle, $offset, $encoding);
    // }
