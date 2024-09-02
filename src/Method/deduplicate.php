<?php

namespace Inilim\String\Method;

/**
 * Replace consecutive instances of a given character with a single character in the given string.
 *
 * @param  string  $string
 * @param  string  $character
 * @return string
 */
function deduplicate(string $string, string $character = ' ')
{
    return \preg_replace('/' . \preg_quote($character, '/') . '+/u', $character, $string);
}
