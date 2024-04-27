<?php

namespace Inilim\String\Method;

/**
 * Split a string into pieces by uppercase characters.
 */
class Ucsplit
{
    /**
     * @return string[]
     */
    public function __invoke(string $string): array
    {
        return \preg_split('/(?=\p{Lu})/u', $string, -1, \PREG_SPLIT_NO_EMPTY);
    }
}
