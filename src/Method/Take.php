<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Take the first or last {$limit} characters of a string.
 */
function take(string $string, int $limit): string
{
    if ($limit < 0) {
        return Str::substr($string, $limit);
    }

    return Str::substr($string, 0, $limit);
}

/**
 * Take the first or last {$limit} characters of a string.
 */
    // public function take(string $string, int $limit): string
    // {
    //     if ($limit < 0) {
    //         return $this->substr($string, $limit);
    //     }

    //     return $this->substr($string, 0, $limit);
    // }
