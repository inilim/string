<?php

namespace Inilim\String\Method;

/**
 * Determine if a given value is a valid UUID.
 * @param  mixed  $value
 */
function isUuid($value): bool
{
    if (!\is_string($value)) return false;
    return \preg_match('/^[\da-f]{8}-[\da-f]{4}-[\da-f]{4}-[\da-f]{4}-[\da-f]{12}$/iD', $value) > 0;
}

/**
 * Determine if a given value is a valid UUID.
 *
 * @param  mixed  $value
 */
    // public function isUuid($value): bool
    // {
    //     if (!\is_string($value)) return false;
    //     return \preg_match('/^[\da-f]{8}-[\da-f]{4}-[\da-f]{4}-[\da-f]{4}-[\da-f]{12}$/iD', $value) > 0;
    // }
