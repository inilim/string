<?php

namespace Inilim\String\Method;

/**
 * Decode the given Base64 encoded string.
 */
function fromBase64(string $string, bool $strict = false): string|false
{
    return \base64_decode($string, $strict);
}

/**
 * Decode the given Base64 encoded string.
 *
 * @param  string  $string
 * @param  bool  $strict
 * @return string|false
 */
    // public static function fromBase64($string, $strict = false)
    // {
    //     return base64_decode($string, $strict);
    // }
