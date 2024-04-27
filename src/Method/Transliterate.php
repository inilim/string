<?php

namespace Inilim\String\Method;

use voku\helper\ASCII;

/**
 * Transliterate a string to its closest ASCII representation.
 */
class Transliterate
{
    public function __invoke(string $string, string|null $unknown = '?', bool|null $strict = false): string
    {
        return ASCII::to_transliterate($string, $unknown, $strict);
    }
}
