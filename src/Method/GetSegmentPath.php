<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * segment url path | 
 * "/sites/16/page/36/settings" | 0 - "sites" | 1 - "16" | 2 - "page" | 3 - "36" | 4 - "settings" | 5 - NULL
 */
class GetSegmentPath
{
    public function __invoke(string $path, int $segment): ?string
    {
        $t = Str::getSegmentsPath($path);
        return $t[$segment] ?? null;
    }

    // function getSegmentPath(string $path, int $segment): string
    // {
    //     $t = \_str()->getSegmentsPath($path);
    //     return $t[$segment] ?? '';
    // }
}
