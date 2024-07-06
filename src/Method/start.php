<?php

namespace Inilim\String\Method;

/**
 * Begin a string with a single instance of a given value.
 */
function start(string $value, string $prefix): string
{
    $quoted = \preg_quote($prefix, '/');

    return $prefix . \preg_replace('/^(?:' . $quoted . ')+/u', '', $value);
}

/**
 * Begin a string with a single instance of a given value.
 */
    // public function start(string $value, string $prefix): string
    // {
    //     $quoted = \preg_quote($prefix, '/');

    //     return $prefix . \preg_replace('/^(?:' . $quoted . ')+/u', '', $value);
    // }
