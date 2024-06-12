<?php

namespace Inilim\String\Method;

/**
 * Remove all "extra" blank space from the given string.
 */
class Squish
{
    public function __invoke(string $value): string
    {
        return \preg_replace('~(\s|\x{3164}|\x{1160})+~u', ' ', \preg_replace('~^[\s\x{FEFF}]+|[\s\x{FEFF}]+$~u', '', $value));
    }

    /**
     * Remove all "extra" blank space from the given string.
     */
    // public function squish(string $value): string
    // {
    //     return \preg_replace('~(\s|\x{3164}|\x{1160})+~u', ' ', \preg_replace('~^[\s\x{FEFF}]+|[\s\x{FEFF}]+$~u', '', $value));
    // }
}
