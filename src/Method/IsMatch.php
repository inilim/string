<?php

namespace Inilim\String\Method;

class IsMatch
{
    /**
     * Determine if a given string matches a given pattern.
     * @param  string|iterable<string>  $pattern
     */
    public function __invoke(string|iterable $pattern, string $value): bool
    {
        if (!\is_iterable($pattern)) $pattern = [$pattern];

        foreach ($pattern as $pattern) {
            $pattern = (string) $pattern;

            if (\preg_match($pattern, $value) === 1) return true;
        }

        return false;
    }

    /**
     * Determine if a given string matches a given pattern.
     * @param  string|iterable<string>  $pattern
     */
    // public function isMatch(string|iterable $pattern, string $value): bool
    // {
    //     if (!\is_iterable($pattern)) $pattern = [$pattern];

    //     foreach ($pattern as $pattern) {
    //         $pattern = (string) $pattern;

    //         if (\preg_match($pattern, $value) === 1) return true;
    //     }

    //     return false;
    // }
}
