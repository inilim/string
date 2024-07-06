<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert a value to studly caps case.
 */
function studly(string $value): string
{
    $words = \explode(' ', Str::replace(['-', '_'], ' ', $value));

    // $studly_words = \array_map(fn ($word) => Str::ucfirst($word), $words);
    $studly_words = \array_map(Str::ucfirst(...), $words);

    return \implode($studly_words);
}

/**
 * Convert a value to studly caps case.
 */
    // public function studly(string $value): string
    // {
    // $key = $value;

    // if (isset($this->studly_cache[$key])) return $this->studly_cache[$key];

    // $words = \explode(' ', $this->replace(['-', '_'], ' ', $value));

    // $studly_words = \array_map(fn ($word) => $this->ucfirst($word), $words);

    // return $this->studly_cache[$key] = \implode($studly_words);
    //     return \implode($studly_words);
    // }
