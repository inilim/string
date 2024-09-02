<?php

namespace Inilim\String\Method;

/**
 * with filter_var "FILTER_VALIDATE_URL"
 */
function isUrl2(string $url): bool
{
    return \filter_var($url, \FILTER_VALIDATE_URL) !== false;
}
