<?php

namespace Inilim\String\Method;

/**
 * Get the string matching the given pattern.
 */
function match_(string $pattern, string $subject): string
{
    \preg_match($pattern, $subject, $matches);

    if (!$matches) return '';

    return $matches[1] ?? $matches[0];
}

/**
 * Get the string matching the given pattern.
 */
    // public function match(string $pattern, string $subject): string
    // {
    //     \preg_match($pattern, $subject, $matches);

    //     if (!$matches) return '';

    //     return $matches[1] ?? $matches[0];
    // }
