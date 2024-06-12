<?php

namespace Inilim\String\Method;

/**
 * Convert the given string to proper case.
 */
class Title
{
    public function __invoke(string $value): string
    {
        return \mb_convert_case($value, \MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Convert the given string to proper case.
     */
    // public function title(string $value): string
    // {
    //     return \mb_convert_case($value, \MB_CASE_TITLE, 'UTF-8');
    // }
}
