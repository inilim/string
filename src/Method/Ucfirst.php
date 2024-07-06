<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Make a string's first character uppercase.
 */
function ucfirst(string $string): string
{
    return Str::upper(Str::substr($string, 0, 1)) . Str::substr($string, 1);
}
