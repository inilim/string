<?php

namespace Inilim\String\Method;

/**
 * Cap a string with a single instance of a given value.
 */
function finish(string $value, string $cap): string
{
    $quoted = \preg_quote($cap, '/');

    return \preg_replace('/(?:' . $quoted . ')+$/u', '', $value) . $cap;
}

/**
 * Cap a string with a single instance of a given value.
 */
    // public function finish(string $value, string $cap): string
    // {
    //     $quoted = \preg_quote($cap, '/');

    //     return \preg_replace('/(?:' . $quoted . ')+$/u', '', $value) . $cap;
    // }
