<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert a string to kebab case.
 */
class Kebab
{
    public function __invoke(string $value): string
    {
        return Str::snake($value, '-');
    }

    /**
     * Convert a string to kebab case.
     */
    // public function kebab(string $value): string
    // {
    //     return $this->snake($value, '-');
    // }
}
