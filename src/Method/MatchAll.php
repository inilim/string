<?php

namespace Inilim\String\Method;

/**
 * Get the string matching the given pattern.
 */
function matchAll(string $pattern, string $subject): array
{
    \preg_match_all($pattern, $subject, $matches);

    if (empty($matches[0])) {
        return [];
    }

    return $matches[1] ?? $matches[0];
}

/**
 * Get the string matching the given pattern.
 *
 * @param  string  $pattern
 * @param  string  $subject
 * @return \Illuminate\Support\Collection
 */
    // public static function matchAll($pattern, $subject)
    // {
    //     preg_match_all($pattern, $subject, $matches);

    //     if (empty($matches[0])) {
    //         return collect();
    //     }

    //     return collect($matches[1] ?? $matches[0]);
    // }
