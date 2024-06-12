<?php

namespace Inilim\String\Method;

/**
 * Get the string matching the given pattern.
 */
class Match_
{
    public function __invoke(string $pattern, string $subject): string
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
}
