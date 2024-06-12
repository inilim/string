<?php

namespace Inilim\String\Method;

/**
 * Reverse the given string.
 */
class Reverse
{
    public function __invoke(string $value): string
    {
        return \implode(\array_reverse(\mb_str_split($value)));
    }

    /**
     * Reverse the given string.
     */
    // public function reverse(string $value): string
    // {
    //     return \implode(\array_reverse(\mb_str_split($value)));
    // }
}
