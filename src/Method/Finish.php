<?php

namespace Inilim\String\Method;

class Finish
{
    /**
     * Cap a string with a single instance of a given value.
     */
    public function __invoke(string $value, string $cap): string
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
}
