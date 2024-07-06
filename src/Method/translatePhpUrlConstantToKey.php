<?php

namespace Inilim\String\Method;

/**
 * Translate a PHP_URL_# constant to the named array keys PHP uses. | analog wp func "_wp_translate_php_url_constant_to_key"
 * @since 4.7.0
 *
 * @link https://www.php.net/manual/en/url.constants.php
 *
 * @param int $constant PHP_URL_# constant.
 * @return string|false The named key or false.
 */
function translatePhpUrlConstantToKey(int $constant): string|false
{
	return match ($constant) {
		\PHP_URL_SCHEME   => 'scheme',
		\PHP_URL_HOST     => 'host',
		\PHP_URL_PORT     => 'port',
		\PHP_URL_USER     => 'user',
		\PHP_URL_PASS     => 'pass',
		\PHP_URL_PATH     => 'path',
		\PHP_URL_QUERY    => 'query',
		\PHP_URL_FRAGMENT => 'fragment',
		default           => false,
	};
}
