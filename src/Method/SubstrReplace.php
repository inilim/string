<?php

namespace Inilim\String\Method;

/**
 * Replace text within a portion of a string.
 */
class SubstrReplace
{
    /**
     * @param  string|string[]  $string
     * @param  string|string[]  $replace
     * @param  int|int[]  $offset
     * @param  int|int[]|null  $length
     * @return string|string[]
     */
    public function __invoke(
        string|array $string,
        string|array $replace,
        int|array $offset = 0,
        int|array|null $length = null
    ): string|array {
        if ($length === null) $length = \strlen($string);

        return \substr_replace($string, $replace, $offset, $length);
    }

    /**
     * Replace text within a portion of a string.
     * @param  string|string[]  $string
     * @param  string|string[]  $replace
     * @param  int|int[]  $offset
     * @param  int|int[]|null  $length
     * @return string|string[]
     */
    // public function substrReplace(string|array $string, string|array $replace, int|array $offset = 0, int|array|null $length = null): string|array
    // {
    //     if ($length === null) $length = \strlen($string);

    //     return \substr_replace($string, $replace, $offset, $length);
    // }
}
