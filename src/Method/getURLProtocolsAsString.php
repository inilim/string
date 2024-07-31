<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * http|https|...
 */
function getURLProtocolsAsString(string $separator = '|'): string
{
    return \implode($separator, Str::getURLProtocolsAsClosure()->__invoke());
}
