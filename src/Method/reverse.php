<?php

namespace Inilim\String\Method;

/**
 * Reverse the given string.
 */
function reverse(string $value): string
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
