<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Parse a Class[@]method style callback into class and method.
 * @return array<int, string|null>
 */
function parseCallback(string $callback, string|null $default = null): array
{
    if (Str::contains($callback, "@anonymous\0")) {
        if (Str::substrCount($callback, '@') > 1) {
            return [
                Str::beforeLast($callback, '@'),
                Str::afterLast($callback, '@'),
            ];
        }

        return [$callback, $default];
    }

    return Str::contains($callback, '@') ? \explode('@', $callback, 2) : [$callback, $default];
}

/**
 * Parse a Class[@]method style callback into class and method.
 * @return array<int, string|null>
 */
    // public function parseCallback(string $callback, string|null $default = null): array
    // {
    //     if ($this->contains($callback, "@anonymous\0")) {
    //         if ($this->substrCount($callback, '@') > 1) {
    //             return [
    //                 $this->beforeLast($callback, '@'),
    //                 $this->afterLast($callback, '@'),
    //             ];
    //         }

    //         return [$callback, $default];
    //     }

    //     return $this->contains($callback, '@') ? \explode('@', $callback, 2) : [$callback, $default];
    // }
