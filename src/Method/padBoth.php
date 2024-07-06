<?php

namespace Inilim\String\Method;

/**
 * Pad both sides of a string with another.
 */
function padBoth(string $value, int $length, string $pad = ' '): string
{
    if (\function_exists('mb_str_pad')) {
        return \mb_str_pad($value, $length, $pad, \STR_PAD_BOTH);
    }

    $short = \max(0, $length - \mb_strlen($value));
    $shortLeft = \floor($short / 2);
    $shortRight = \ceil($short / 2);

    return \mb_substr(\str_repeat($pad, $shortLeft), 0, $shortLeft) .
        $value .
        \mb_substr(\str_repeat($pad, $shortRight), 0, $shortRight);
}

/**
 * Pad both sides of a string with another.
 */
    // public function padBoth(string $value, int $length, string $pad = ' '): string
    // {
    //     if (\function_exists('mb_str_pad')) {
    //         return \mb_str_pad($value, $length, $pad, \STR_PAD_BOTH);
    //     }

    //     $short = \max(0, $length - \mb_strlen($value));
    //     $shortLeft = \floor($short / 2);
    //     $shortRight = \ceil($short / 2);

    //     return \mb_substr(\str_repeat($pad, $shortLeft), 0, $shortLeft) .
    //         $value .
    //         \mb_substr(\str_repeat($pad, $shortRight), 0, $shortRight);
    // }
