<?php

namespace Inilim\String\Method;

/**
 * Transliterate a UTF-8 value to ASCII.
 */
class Ascii
{
    public function __invoke(string $value, string $language = 'en'): string
    {
        return \voku\helper\ASCII::to_ascii($value, $language);
    }
}
