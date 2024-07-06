<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert a value to camel case.
 */
function camel(string $value): string
{
    return \lcfirst(Str::studly($value));
}
