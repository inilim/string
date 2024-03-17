<?php

use Inilim\String\Str;

if (!function_exists('_str')) {
    function _str(): Str
    {
        static $instance = null;
        if ($instance !== null) return $instance;
        return $instance = new Str;
    }
}
