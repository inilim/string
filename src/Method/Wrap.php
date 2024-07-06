<?php

namespace Inilim\String\Method;

/**
 * Wrap the string with the given strings.
 */
function wrap(string $value, string $before, string|null $after = null): string
{
    return $before . $value . ($after ??= $before);
}

/**
 * Wrap the string with the given strings.
 */
    // public function wrap(string $value, string $before, string|null $after = null): string
    // {
    //     return $before . $value . ($after ??= $before);
    // }
