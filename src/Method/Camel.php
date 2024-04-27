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
        // if (isset($this->camel_cache[$value])) {
        // return $this->camel_cache[$value];
        // }

        // return $this->camel_cache[$value] = \lcfirst($this->studly($value));
        return \lcfirst(Str::studly($value));
    }
}
