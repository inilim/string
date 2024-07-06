<?php

namespace Inilim\String\Method;

/**
 * Get the number of words a string contains.
 */
function wordCount(string $string, string|null $characters = null): int
{
    return \str_word_count($string, 0, $characters);
}
