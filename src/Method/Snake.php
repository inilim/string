<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert a string to snake case.
 */
class Snake
{
    public function __invoke(string $value, string $delimiter = '_'): string
    {
        if (!\ctype_lower($value)) {
            $value = \preg_replace('/\s+/u', '', \ucwords($value));

            $value = Str::lower(\preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
        }

        return $value;
    }

    /**
     * Convert a string to snake case.
     */
    // public function snake(string $value, string $delimiter = '_'): string
    // {
    // $key = $value;

    // if (isset($this->snake_cache[$key][$delimiter])) {
    // return $this->snake_cache[$key][$delimiter];
    // }

    //     if (!\ctype_lower($value)) {
    //         $value = \preg_replace('/\s+/u', '', \ucwords($value));

    //         $value = $this->lower(\preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
    //     }

    //     // return $this->snake_cache[$key][$delimiter] = $value;
    //     return $value;
    // }
}
