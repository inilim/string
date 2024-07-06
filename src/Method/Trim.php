<?php

namespace Inilim\String\Method;

/**
 * Remove all whitespace from both ends of a string.
 */
function trim(string $value, ?string $charlist = null): string
{
    if ($charlist === null) {
        return \preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+|[\s\x{FEFF}\x{200B}\x{200E}]+$~u', '', $value) ?? \trim($value);
    }

    return \trim($value, $charlist);
}

/**
 * Remove all whitespace from both ends of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */
    // public static function trim($value, $charlist = null)
    // {
    //     if ($charlist === null) {
    //         return preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+|[\s\x{FEFF}\x{200B}\x{200E}]+$~u', '', $value) ?? trim($value);
    //     }

    //     return trim($value, $charlist);
    // }
