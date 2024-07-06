<?php

namespace Inilim\String\Method;

/**
 * Determine if a given string starts with a given substring.
 * @param  string|iterable<string>  $needles
 */
function startsWith(string $haystack, string|iterable $needles): bool
{
    if (!\is_iterable($needles)) $needles = [$needles];

    foreach ($needles as $needle) {
        if ((string) $needle !== '' && \str_starts_with($haystack, $needle)) {
            return true;
        }
    }

    return false;
}

/**
 * Determine if a given string starts with a given substring.
 * @param  string|iterable<string>  $needles
 */
    // public function startsWith(string $haystack, string|iterable $needles): bool
    // {
    //     if (!\is_iterable($needles)) $needles = [$needles];

    //     foreach ($needles as $needle) {
    //         if ((string) $needle !== '' && \str_starts_with($haystack, $needle)) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }
