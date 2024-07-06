<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Convert the given string to proper case for each word.
 */
function headline(string $value): string
{
    $parts = \explode(' ', $value);

    $parts = \sizeof($parts) > 1
        ? \array_map([Str::class, 'title'], $parts)
        : \array_map([Str::class, 'title'], Str::ucsplit(\implode('_', $parts)));

    $collapsed = Str::replace(['-', '_', ' '], '_', \implode('_', $parts));

    return \implode(' ', \array_filter(\explode('_', $collapsed)));
}

/**
 * Convert the given string to proper case for each word.
 */
    // public function headline(string $value): string
    // {
    //     $parts = \explode(' ', $value);

    //     $parts = \sizeof($parts) > 1
    //         ? \array_map([$this::class, 'title'], $parts)
    //         : \array_map([$this::class, 'title'], $this->ucsplit(\implode('_', $parts)));

    //     $collapsed = $this->replace(['-', '_', ' '], '_', \implode('_', $parts));

    //     return \implode(' ', \array_filter(\explode('_', $collapsed)));
    // }
