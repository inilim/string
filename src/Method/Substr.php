<?php

namespace Inilim\String\Method;

/**
 * Returns the portion of the string specified by the start and length parameters.
 */
class Substr
{
    public function __invoke(
        string $string,
        int $start,
        int|null $length = null,
        string $encoding = 'UTF-8'
    ): string {
        return \mb_substr($string, $start, $length, $encoding);
    }

    /**
     * Returns the portion of the string specified by the start and length parameters.
     */
    // public function substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8'): string
    // {
    //     return \mb_substr($string, $start, $length, $encoding);
    // }
}
