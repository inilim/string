<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Generate a more truly "random" alpha-numeric string.
 */
class Random
{
    public function __invoke(int $length = 16): string
    {
        return (Str::property()->random_string_factory ?? function ($length) {
            $string = '';

            while (($len = \strlen($string)) < $length) {
                $size = $length - $len;

                $bytesSize = (int) \ceil($size / 3) * 3;

                $bytes = \random_bytes($bytesSize);

                $string .= \substr(\str_replace(['/', '+', '='], '', \base64_encode($bytes)), 0, $size);
            }

            return $string;
        })($length);
    }

    /**
     * Generate a more truly "random" alpha-numeric string.
     */
    // public function random(int $length = 16): string
    // {
    //     return ($this->random_string_factory ?? function ($length) {
    //         $string = '';

    //         while (($len = \strlen($string)) < $length) {
    //             $size = $length - $len;

    //             $bytesSize = (int) \ceil($size / 3) * 3;

    //             $bytes = \random_bytes($bytesSize);

    //             $string .= \substr(\str_replace(['/', '+', '='], '', \base64_encode($bytes)), 0, $size);
    //         }

    //         return $string;
    //     })($length);
    // }
}
