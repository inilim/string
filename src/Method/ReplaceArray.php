<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Replace a given value in the string sequentially with an array. |
 * 
 * $string = 'The event will take place between ? and ?'; |
 * $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string); |
 */
class ReplaceArray
{
    /**
     * @param  string[] $replace
     */
    public function __invoke(string $search, array $replace, string $subject): string
    {
        $segments = \explode($search, $subject);
        $result = \array_shift($segments);

        foreach ($segments as $segment) {
            $result .= Str::toStringOr(\array_shift($replace) ?? $search, $search) . $segment;
        }

        return $result;
    }

    /**
     * @param  string[] $replace
     */
    // public function replaceArray(string $search, array $replace, string $subject): string
    // {
    // if ($replace instanceof \Traversable) {
    //     $replace = collect($replace)->all();
    // }

    // $segments = \explode($search, $subject);
    // $result = \array_shift($segments);

    // foreach ($segments as $segment) {
    //     $result .= $this->toStringOr(\array_shift($replace) ?? $search, $search) . $segment;
    // }

    // return $result;
    // }
}
