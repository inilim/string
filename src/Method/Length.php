<?php

namespace Inilim\String\Method;

/**
 * Return the length of the given string.
 */
class Length
{
    public function __invoke(string $value, string|null $encoding = 'UTF-8'): int
    {
        return \mb_strlen($value, $encoding);
    }

    /**
     * Return the length of the given string.
     */
    // public function length(string $value, string|null $encoding = 'UTF-8'): int
    // {
    //     return \mb_strlen($value, $encoding);
    // }
}
