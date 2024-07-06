<?php

namespace Inilim\String\Method;

/**
 * Pad the right side of a string with another.
 */
function padRight(string $value, int $length, string $pad = ' '): string
{
    if (\function_exists('mb_str_pad')) {
        return \mb_str_pad($value, $length, $pad, \STR_PAD_RIGHT);
    }

    $short = \max(0, $length - \mb_strlen($value));

    return $value . \mb_substr(\str_repeat($pad, $short), 0, $short);
}

/**
 * Pad the right side of a string with another.
 */
    // public function padRight(string $value, int $length, string $pad = ' '): string
    // {
    //     if (\function_exists('mb_str_pad')) {
    //         return \mb_str_pad($value, $length, $pad, \STR_PAD_RIGHT);
    //     }

    //     $short = \max(0, $length - \mb_strlen($value));

    //     return $value . \mb_substr(\str_repeat($pad, $short), 0, $short);
    // }
