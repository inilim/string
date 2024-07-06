<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Unwrap the string with the given strings.
 */
function unwrap(string $value, string $before, string|null $after = null): string
{
    if (Str::startsWith($value, $before)) {
        $value = Str::substr($value, Str::length($before));
    }

    if (Str::endsWith($value, $after ??= $before)) {
        $value = Str::substr($value, 0, -Str::length($after));
    }

    return $value;
}

/**
 * Unwrap the string with the given strings.
 */
    // public function unwrap(string $value, string $before, string|null $after = null): string
    // {
    //     if ($this->startsWith($value, $before)) {
    //         $value = $this->substr($value, $this->length($before));
    //     }

    //     if ($this->endsWith($value, $after ??= $before)) {
    //         $value = $this->substr($value, 0, -$this->length($after));
    //     }

    //     return $value;
    // }
