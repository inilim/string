<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Make a string's first character lowercase.
 */
class Lcfirst
{
    public function __invoke(string $string): string
    {
        return Str::lower(Str::substr($string, 0, 1)) . Str::substr($string, 1);
    }
}
