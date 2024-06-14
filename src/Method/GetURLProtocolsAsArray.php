<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * [http, https, ...]
 */
class GetURLProtocolsAsArray
{
    /**
     * @return string[]
     */
    public function __invoke(): array
    {
        return \explode('|', Str::getURLProtocolsAsString());
    }
}
