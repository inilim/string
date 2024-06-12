<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Limit the number of words in a string.
 */
class Words
{
    public function __invoke(string $value, int $words = 100, string $end = '...'): string
    {
        \preg_match('/^\s*+(?:\S++\s*+){1,' . $words . '}/u', $value, $matches);

        if (!isset($matches[0]) || Str::length($value) === Str::length($matches[0])) {
            return $value;
        }

        return \rtrim($matches[0]) . $end;
    }

    /**
     * Limit the number of words in a string.
     */
    // public function words(string $value, int $words = 100, string $end = '...'): string
    // {
    //     \preg_match('/^\s*+(?:\S++\s*+){1,' . $words . '}/u', $value, $matches);

    //     if (!isset($matches[0]) || $this->length($value) === $this->length($matches[0])) {
    //         return $value;
    //     }

    //     return \rtrim($matches[0]) . $end;
    // }
}
