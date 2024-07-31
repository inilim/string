<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * [http, https, ...]
 * @return string[]
 */
function getURLProtocolsAsArray(): array
{
    return Str::getURLProtocolsAsClosure()->__invoke();
}
