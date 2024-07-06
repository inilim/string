<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Make a string's first character lowercase.
 */
function lcfirst(string $string): string
{
    return Str::lower(Str::substr($string, 0, 1)) . Str::substr($string, 1);
}
