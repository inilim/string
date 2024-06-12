<?php

namespace Inilim\String\Method;

/**
 * Convert the given string to Base64 encoding.
 */
class ToBase64
{
    public function __invoke(string $string): string
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
}
