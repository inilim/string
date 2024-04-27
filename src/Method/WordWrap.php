<?php

namespace Inilim\String\Method;

/**
 * Wrap a string to a given number of characters.
 */
class WordWrap
{
    public function __invoke(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false): string
    {
        return \wordwrap($string, $characters, $break, $cut_long_words);
    }
}
