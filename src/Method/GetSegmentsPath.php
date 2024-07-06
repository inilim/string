<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * segments url path
 * @return string[]|array{}
 */
function getSegmentsPath(string $path): array
{
    $t = \trim(Str::trim($path), '/');
    if ($t === '') return [];
    $t = \preg_replace('#\/{2,}#', '/', $t);
    return \explode('/', $t);
}

/**
 * @return string[]|array{}
 */
    // function getSegmentsPath(string $path): array
    // {
    //     $t = \trim($path, '/');
    //     if ($t === '') return [];
    //     $t = \preg_replace('#\/{2,}#', '/', $t);
    //     return \explode('/', $t);
    // }