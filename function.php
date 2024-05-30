<?php

use Inilim\String\Str;

if (!\function_exists('_str')) {
    function _str(): Str
    {
        static $o = new Str;
        return $o;
    }
}
