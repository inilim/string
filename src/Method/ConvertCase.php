<?php

namespace Inilim\String\Method;

class ConvertCase
{
    /**
     * Convert the case of a string.
     */
    public function __invoke(string $string, int $mode = \MB_CASE_FOLD, ?string $encoding = 'UTF-8'): string
    {
        return \mb_convert_case($string, $mode, $encoding);
    }
}
