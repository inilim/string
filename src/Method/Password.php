<?php

namespace Inilim\String\Method;

/**
 * Generate a random, secure password.
 */
class Password
{
    public function __invoke(
        int $length = 32,
        bool $letters = true,
        bool $numbers = true,
        bool $symbols = true,
        bool $spaces = false,
    ): string {
        $characters = [];
        $password = '';

        if ($letters) {
            $characters[] = [
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v',
                'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
                'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
                'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            ];
        }
        if ($numbers) {
            $characters[] = [
                '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
            ];
        }
        if ($symbols) {
            $characters[] = [
                '~', '!', '#', '$', '%', '^', '&', '*', '(', ')', '-',
                '_', '.', ',', '<', '>', '?', '/', '\\', '{', '}', '[',
                ']', '|', ':', ';',
            ];
        }
        if ($spaces) {
            $characters[] = [
                ' '
            ];
        }

        $characters        = \array_merge([], ...$characters);
        $characters_length = \sizeof($characters);

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[\random_int(0, $characters_length - 1)];
        }

        return \str_shuffle($password);
    }

    /**
     * Generate a random, secure password.
     *
     * @param  int  $length
     * @param  bool  $letters
     * @param  bool  $numbers
     * @param  bool  $symbols
     * @param  bool  $spaces
     * @return string
     */
    // public static function password($length = 32, $letters = true, $numbers = true, $symbols = true, $spaces = false)
    // {
    //     $password = new Collection();

    //     $options = (new Collection([
    //         'letters' => $letters === true ? [
    //             'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
    //             'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v',
    //             'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
    //             'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
    //             'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
    //         ] : null,
    //         'numbers' => $numbers === true ? [
    //             '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
    //         ] : null,
    //         'symbols' => $symbols === true ? [
    //             '~', '!', '#', '$', '%', '^', '&', '*', '(', ')', '-',
    //             '_', '.', ',', '<', '>', '?', '/', '\\', '{', '}', '[',
    //             ']', '|', ':', ';',
    //         ] : null,
    //         'spaces' => $spaces === true ? [' '] : null,
    //     ]))->filter()->each(
    //         fn ($c) => $password->push($c[random_int(0, count($c) - 1)])
    //     )->flatten();

    //     $length = $length - $password->count();

    //     return $password->merge($options->pipe(
    //         fn ($c) => Collection::times($length, fn () => $c[random_int(0, $c->count() - 1)])
    //     ))->shuffle()->implode('');
    // }
}
