<?php

namespace Inilim\String\Method;

class PadLeft
{
    public function __invoke(string $value, int $length, string $pad = ' '): string
    {
        if (\function_exists('mb_str_pad')) {
            return \mb_str_pad($value, $length, $pad, \STR_PAD_LEFT);
        }

        $short = \max(0, $length - \mb_strlen($value));

        return \mb_substr(\str_repeat($pad, $short), 0, $short) . $value;
    }

    /**
     * Pad the left side of a string with another.
     */
    // public function padLeft(string $value, int $length, string $pad = ' '): string
    // {
    //     if (\function_exists('mb_str_pad')) {
    //         return \mb_str_pad($value, $length, $pad, \STR_PAD_LEFT);
    //     }

    //     $short = \max(0, $length - \mb_strlen($value));

    //     return \mb_substr(\str_repeat($pad, $short), 0, $short) . $value;
    // }
}
