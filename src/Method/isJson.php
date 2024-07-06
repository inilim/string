<?php

namespace Inilim\String\Method;

/**
 * Determine if a given value is valid JSON.
 */
function isJson(string $value): bool
{
    if (!is_string($value)) {
        return false;
    }

    if (\function_exists('json_validate')) {
        return \json_validate($value, 512);
    }

    try {
        \json_decode($value, true, 512, \JSON_THROW_ON_ERROR);
    } catch (\JsonException) {
        return false;
    }

    return true;
}

/**
 * Determine if a given value is valid JSON.
 *
 * @param  mixed  $value
 * @return bool
 */
    // public static function isJson($value)
    // {
    //     if (!is_string($value)) {
    //         return false;
    //     }

    //     if (function_exists('json_validate')) {
    //         return json_validate($value, 512);
    //     }

    //     try {
    //         json_decode($value, true, 512, JSON_THROW_ON_ERROR);
    //     } catch (JsonException) {
    //         return false;
    //     }

    //     return true;
    // }
