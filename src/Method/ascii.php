<?php

namespace Inilim\String\Method;

/**
 * Transliterate a UTF-8 value to ASCII.
 */
function ascii(string $value, string $language = 'en'): string
{
    return \voku\helper\ASCII::to_ascii($value, $language);
}
