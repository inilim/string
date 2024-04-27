<?php

namespace Inilim\String\Method;

/**
 * Convert the given value to a string or return the given fallback on failure.
 */
class ToStringOr
{
    /**
     * @param mixed $value
     */
    public function __invoke($value, string $fallback): string
    {
        try {
            return (string) $value;
        } catch (\Throwable) {
            return $fallback;
        }
    }
}
