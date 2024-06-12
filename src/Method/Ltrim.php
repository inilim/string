<?php

namespace Inilim\String\Method;

/**
 * Remove all whitespace from the beginning of a string.
 */
class Ltrim
{
    public function __invoke(string $value, ?string $charlist = null): string
    {
        if ($charlist === null) {
            return \preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+~u', '', $value) ?? \ltrim($value);
        }

        return \ltrim($value, $charlist);
    }

    /**
     * Remove all whitespace from the beginning of a string.
     *
     * @param  string  $value
     * @param  string|null  $charlist
     * @return string
     */
    // public static function ltrim($value, $charlist = null)
    // {
    //     if ($charlist === null) {
    //         return preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+~u', '', $value) ?? ltrim($value);
    //     }

    //     return ltrim($value, $charlist);
    // }
}
