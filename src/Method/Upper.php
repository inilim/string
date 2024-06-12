<?php

namespace Inilim\String\Method;

/**
 * Convert the given string to upper-case.
 */
class Upper
{
    public function __invoke(string $value): string
    {
        return \mb_strtoupper($value, 'UTF-8');
    }

    /**
     * Convert the given string to upper-case.
     */
    // public function upper(string $value): string
    // {
    //     return \mb_strtoupper($value, 'UTF-8');
    // }
}
