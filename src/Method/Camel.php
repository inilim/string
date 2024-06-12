<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert a value to camel case.
 */
class Camel
{
    public function __invoke(string $value): string
    {
        return \lcfirst(Str::studly($value));
    }
}
