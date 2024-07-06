<?php

namespace Inilim\String\Method;

/**
 * Convert the given value to a string or return the given fallback on failure.
 * @param mixed $value
 */
function toStringOr($value, string $fallback): string
{
    try {
        return (string) $value;
    } catch (\Throwable) {
        return $fallback;
    }
}
