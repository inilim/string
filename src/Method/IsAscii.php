<?php

namespace Inilim\String\Method;

/**
 * Determine if a given string is 7 bit ASCII.
 */
function isAscii(string $value): bool
{
    return \voku\helper\ASCII::is_ascii($value);
}

/**
 * Determine if a given string is 7 bit ASCII.
 */
    // public function isAscii(string $value): bool
    // {
    //     return ASCII::is_ascii($value);
    // }
