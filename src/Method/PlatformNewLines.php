<?php

namespace Inilim\String\Method;

/**
 * Converts line endings to platform-specific, i.e. \r\n on Windows and \n elsewhere.
 * Line endings are: \n, \r, \r\n, U+2028 line separator, U+2029 paragraph separator.
 */
class PlatformNewLines
{
    public function __invoke(string $s): string
    {
        return \preg_replace("~\r\n?|\n|\u{2028}|\u{2029}~", PHP_EOL, $s);
    }
}
