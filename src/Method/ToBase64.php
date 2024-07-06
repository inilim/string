<?php

namespace Inilim\String\Method;

/**
 * Convert the given string to Base64 encoding.
 */
function toBase64(string $string): string
{
    return \base64_encode($string);
}

/**
 * Convert the given string to Base64 encoding.
 *
 * @param  string  $string
 * @return string
 */
    // public static function toBase64($string): string
    // {
    //     return base64_encode($string);
    // }
