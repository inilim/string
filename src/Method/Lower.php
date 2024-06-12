<?php

namespace Inilim\String\Method;

/**
 * Convert the given string to lower-case.
 */
class Lower
{
    public function __invoke(string $value): string
    {
        return \mb_strtolower($value, 'UTF-8');
    }

    /**
     * Convert the given string to lower-case.
     */
    // public function lower(string $value): string
    // {
    //     return \mb_strtolower($value, 'UTF-8');
    // }
}
