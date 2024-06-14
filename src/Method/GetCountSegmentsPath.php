<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * count segments url path
 */
class GetCountSegmentsPath
{
    /**
     */
    public function __invoke(string $path): int
    {
        $t = \trim(Str::trim($path), '/');
        if ($t === '') return 0;
        $t = \preg_replace('#\/{2,}#', '/', $t);
        return \substr_count($t, '/');
    }

    // function getCountSegmentsPath(string $path): int
    // {
    //     $t = \trim(Str::trim($path), '/');
    //     if ($t === '') return 0;
    //     $t = \preg_replace('#\/{2,}#', '/', $t);
    //     return \substr_count($t, '/');
    // }
}
