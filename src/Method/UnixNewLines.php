<?php

namespace Inilim\String\Method;

/**
 * Converts line endings to \n used on Unix-like systems.
 * Line endings are: \n, \r, \r\n, U+2028 line separator, U+2029 paragraph separator.
 */
class UnixNewLines
{
    public function __invoke(string $s): string
    {
        return \preg_replace("~\r\n?|\u{2028}|\u{2029}~", "\n", $s);
    }
}
