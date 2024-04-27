<?php

namespace Inilim\String\Method;

use voku\helper\ASCII as _ASCII;

/**
 * Transliterate a UTF-8 value to ASCII.
 */
class Ascii
{
    public function __invoke(string $value, string $language = 'en'): string
    {
        return _ASCII::to_ascii($value, $language);
    }
}
